// フォームページ専用（お問い合わせ / 応募フォーム / 各完了ページ）

"use strict";

(() => {
  const config = window.satoForm;
  if (!config) return;

  const SENT_KEY = "satoFormSent";

  // ---- 入力ページ：確認画面（Confirm Plus）に案内文を足す / 送信成功で完了ページへ ----
  if (config.completeUrl) {
    const LEAD_TEXT = "入力内容をご確認のうえ、「送信する」を押してください。";

    const addLead = (confirmBox) => {
      if (confirmBox.querySelector(".c-form__confirm-lead")) return;
      const lead = document.createElement("p");
      lead.className = "c-form__confirm-lead";
      lead.textContent = LEAD_TEXT;
      confirmBox.insertBefore(lead, confirmBox.firstChild);
    };

    // ---- 確認画面の表示に合わせて URL を /confirm/ に切り替える（Confirm Plus は同一ページ内で表示する） ----
    const isConfirmShown = () => {
      const box = document.querySelector("#wpcf7cpcnf");
      return !!box && box.offsetParent !== null;
    };
    // 見出し（.lower-page-title-ja）: 入力=「お問い合わせ」/ 確認=「お問い合わせ確認」
    const titleJa = document.querySelector(".lower-page-title-ja");
    const TITLE_INPUT = titleJa ? titleJa.textContent : "";
    const TITLE_CONFIRM = "お問い合わせ確認";
    const setTitle = (confirm) => {
      if (titleJa) titleJa.textContent = confirm ? TITLE_CONFIRM : TITLE_INPUT;
    };
    let confirmShowing = false;
    let ignorePop = false;
    let mailSent = false; // 送信成功後は完了ページへ遷移するので、履歴の巻き戻しをしない

    const syncUrl = () => {
      const now = isConfirmShown();
      if (now === confirmShowing) return;
      confirmShowing = now;
      if (mailSent) return;
      setTitle(now);
      if (!config.confirmUrl || !window.history || !history.pushState) return;
      if (now) {
        history.pushState({ satoConfirm: 1 }, "", config.confirmUrl);
        window.scrollTo(0, 0);
      } else if (history.state && history.state.satoConfirm) {
        ignorePop = true; // 「入力画面へ戻る」→ 履歴を1つ戻して /contact/ に
        history.back();
      }
    };

    // ブラウザの「戻る」で確認画面から入力画面へ戻す
    window.addEventListener("popstate", () => {
      if (ignorePop) {
        ignorePop = false;
        return;
      }
      if (confirmShowing) {
        const edit = document.querySelector(".wpcf7cp-cfm-edit-btn");
        if (edit) edit.click();
      }
    });

    new MutationObserver(() => {
      const confirmBox = document.querySelector("#wpcf7cpcnf");
      if (confirmBox) addLead(confirmBox);
      syncUrl();
    }).observe(document.body, { childList: true, subtree: true, attributes: true, attributeFilter: ["style", "class", "hidden"] });

    // 送信完了（メール送信成功）→ 完了ページへ。直接アクセス防止の目印をセッションに残す
    document.addEventListener("wpcf7mailsent", () => {
      document.documentElement.classList.add("is-form-finishing"); // 完了ページへ遷移するまでの間、入力画面が一瞬見えないよう隠す
      mailSent = true; // 先に立てる（確認画面が閉じた時の history.back() が遷移を打ち消すのを防ぐ）
      try {
        sessionStorage.setItem(SENT_KEY, config.formSlug);
      } catch (e) {
        /* sessionStorage が使えない環境でも完了ページへは遷移する */
      }
      window.location.replace(config.completeUrl);
    });
    // 完了ページから「戻る」でbfcache復元された場合に、隠したままにならないよう解除
    window.addEventListener("pageshow", (e) => {
      if (e.persisted) document.documentElement.classList.remove("is-form-finishing");
    });
    return;
  }

  // ---- 完了ページ：送信を経ていない（URL直打ち）場合は案内を切り替える ----
  const message = document.querySelector(".form-complete__message");
  const denied = document.querySelector(".form-complete__denied");
  if (!message || !denied) return;

  let sent = "";
  try {
    sent = sessionStorage.getItem(SENT_KEY) || "";
  } catch (e) {
    sent = config.formSlug;
  }

  if (sent !== config.formSlug) {
    message.hidden = true;
    denied.hidden = false;
  }
})();
