function getUserBrowser() {
  const userAgent = navigator.userAgent.toLowerCase();
  const hasUserAgentSafariToken = userAgent.indexOf('safari') > -1;
  const hasUserAgentChromeToken = userAgent.indexOf('chrome') > -1;

  if (hasUserAgentSafariToken) {
    if (hasUserAgentChromeToken) {
      return 'chrome';
    }

    return 'safari';
  }
}

function setupMasks() {
  function setMask(elements, maskOptions) {
    elements.forEach(function (element) {
      const mask = IMask(element, maskOptions);

      mask.on('complete', function () {
        // Safari doesn't detect the latest input changes
        if (getUserBrowser() === 'safari') {
          element.dispatchEvent(new InputEvent('change'));
        }
      });
    });
  }

  const phoneMaskOptions = {
    mask: [
      { mask: '(00) 0000-0000' },
      { mask: '(00) 00000-0000' },
    ],
  };

  setMask(
      document.querySelectorAll('.wa-chat-mask-phone'),
      phoneMaskOptions,
  );

  const cpfMaskOptions = { mask: '000.000.000-00' };

  setMask(
      document.querySelectorAll('.wa-chat-mask-cpf'),
      cpfMaskOptions,
  );

  const cnpjMaskOptions = { mask: '00.000.000/0000-00' };

  setMask(
      document.querySelectorAll('.wa-chat-mask-cnpj'),
      cnpjMaskOptions,
  );

  const cpfcnpjMaskOptions = { mask: [cpfMaskOptions, cnpjMaskOptions] };

  setMask(
      document.querySelectorAll('.wa-chat-mask-cpfcnpj'),
      cpfcnpjMaskOptions,
  );
}

document.addEventListener("DOMContentLoaded", setupMasks);

function whatsappChatSubmitted() {
  return new Promise(resolve => {
    setTimeout(() => {
      resolve(true);
    }, 2000);
  });
}

window.addEventListener('whatsappChatSubmitted', async event => {
  await whatsappChatSubmitted().then(() => {
    document.querySelector('.whatsapp-chat-link').click();
  });
});
