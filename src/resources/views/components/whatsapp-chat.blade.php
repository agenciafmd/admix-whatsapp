<div class="whatsapp-chat">
  <input type="checkbox" id="whatsapp-chat-is-open" class="whatsapp-chat-is-open">
  
  <div class="whatsapp-chat-window">
    <div class="whatsapp-chat-header">
      <picture>
        <img loading="lazy"
             decoding="async"
             src="/images/img-whatsapp-consultor.png"
             srcset="/images/img-whatsapp-consultor.png, /images/img-whatsapp-consultor@2x.png 2x"
             alt="Consultor"
             title="Consultor"
             class="whatsapp-chat-contact-img"
             width="38"
             height="38">
      </picture>
      <div class="whatsapp-chat-contact-info">
        <strong>{{config('admix-whatsapp.atendent')}}</strong>
        <small>
          {{ config('admix-whatsapp.occupation') }}
          •
          <span class="text-wa-light-green">Online</span>
        </small>
      </div>
      <label for="whatsapp-chat-is-open"
             title="Fechar o chat do WhatsApp"
             class="whatsapp-chat-close">
        <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd"
                d="M42.5467 12.4536C43.2627 13.1696 43.2627 14.3304 42.5467 15.0464L15.0467 42.5464C14.3307 43.2623 13.1699 43.2623 12.454 42.5464C11.738 41.8304 11.738 40.6696 12.454 39.9536L39.954 12.4536C40.6699 11.7377 41.8307 11.7377 42.5467 12.4536Z"
                fill="currentColor"/>
          <path fill-rule="evenodd" clip-rule="evenodd"
                d="M12.454 12.4536C13.1699 11.7377 14.3307 11.7377 15.0467 12.4536L42.5467 39.9536C43.2627 40.6696 43.2627 41.8304 42.5467 42.5464C41.8307 43.2623 40.6699 43.2623 39.954 42.5464L12.454 15.0464C11.738 14.3304 11.738 13.1696 12.454 12.4536Z"
                fill="currentColor"/>
        </svg>
      </label>
    </div>
    <div class="whatsapp-chat-body">
      <p class="whatsapp-chat-bubble">
        {{ config('admix-whatsapp.text') }}
      </p>
      @livewire('frontend::whatsapp-chat',['url' => [ 'routeName' => request()->route()->getName(), 'routeUrl' => request()->path()]])
    </div>
  </div>
  
  <label for="whatsapp-chat-is-open"
         title="Abrir o chat do WhatsApp"
         class="whatsapp-chat-button">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M20.4054 3.4875C18.1607 1.2375 15.1714 0 11.9946 0C5.4375 0 0.101786 5.33571 0.101786 11.8929C0.101786 13.9875 0.648214 16.0339 1.6875 17.8393L0 24L6.30536 22.3446C8.04107 23.2929 9.99643 23.7911 11.9893 23.7911H11.9946C18.5464 23.7911 24 18.4554 24 11.8982C24 8.72143 22.65 5.7375 20.4054 3.4875ZM11.9946 21.7875C10.2161 21.7875 8.475 21.3107 6.95893 20.4107L6.6 20.1964L2.86071 21.1768L3.85714 17.5286L3.62143 17.1536C2.63036 15.5786 2.11071 13.7625 2.11071 11.8929C2.11071 6.44464 6.54643 2.00893 12 2.00893C14.6411 2.00893 17.1214 3.0375 18.9857 4.90714C20.85 6.77679 21.9964 9.25714 21.9911 11.8982C21.9911 17.3518 17.4429 21.7875 11.9946 21.7875ZM17.4161 14.3839C17.1214 14.2339 15.6589 13.5161 15.3857 13.4196C15.1125 13.3179 14.9143 13.2696 14.7161 13.5696C14.5179 13.8696 13.95 14.5339 13.7732 14.7375C13.6018 14.9357 13.425 14.9625 13.1304 14.8125C11.3839 13.9393 10.2375 13.2536 9.08571 11.2768C8.78036 10.7518 9.39107 10.7893 9.95893 9.65357C10.0554 9.45536 10.0071 9.28393 9.93214 9.13393C9.85714 8.98393 9.2625 7.52143 9.01607 6.92679C8.775 6.34821 8.52857 6.42857 8.34643 6.41786C8.175 6.40714 7.97679 6.40714 7.77857 6.40714C7.58036 6.40714 7.25893 6.48214 6.98571 6.77679C6.7125 7.07679 5.94643 7.79464 5.94643 9.25714C5.94643 10.7196 7.0125 12.1339 7.15714 12.3321C7.30714 12.5304 9.25179 15.5304 12.2357 16.8214C14.1214 17.6357 14.8607 17.7054 15.8036 17.5661C16.3768 17.4804 17.5607 16.8482 17.8071 16.1518C18.0536 15.4554 18.0536 14.8607 17.9786 14.7375C17.9089 14.6036 17.7107 14.5286 17.4161 14.3839Z"
            fill="currentColor"/>
    </svg>
  </label>
  
  <a href="https://api.whatsapp.com/send?phone={{config('admix-whatsapp.phonenumber')}}"
     target="_blank"
     class="whatsapp-chat-link"></a>
</div>

@push('scripts')
<script>
  function whatsappChatSubmitted() {
    return new Promise(resolve => {
      setTimeout(() => {
        resolve(true);
      }, 3000);
    });
  }
  
  window.addEventListener('whatsappChatSubmitted', async event => {
    await whatsappChatSubmitted().then(() => {
      document.querySelector('.whatsapp-chat-link').click();
    });
  });
</script>
@endpush

@push('head')
<style>
  :root {
    --wa-chat-dark-green: #2B6056;
    --wa-chat-green: #128C7E;
    --wa-chat-light-green: #25D366;
    --wa-chat-light: #DCF8C7;
    --wa-chat-white: #F9F9F9;
    --wa-chat-red: #DC1C2A;
    
    --wa-chat-font-family: sans-serif;
    --wa-chat-max-width: 27.5rem;
    --wa-chat-box-shadow: 0 0.5rem 1.5rem -0.25rem rgba(0, 0, 0, 0.15);
    --wa-chat-border-radius: .5rem;
    --wa-chat-z-index: 1030;
    
    --wa-chat-button-size: 3.5rem;
    --wa-chat-button-color: var(--wa-chat-light-green);
    --wa-chat-button-icon-size: 1.5rem;
    --wa-chat-button-distance-x: 1rem;
    --wa-chat-button-distance-y: 1rem;
    
    --wa-chat-window-margin-bottom: calc(var(--wa-chat-button-size) + var(--wa-chat-button-distance-y) + 1rem);
    
    --wa-chat-header-padding-x: 1.25rem;
    --wa-chat-header-padding-y: 0.625rem;
    --wa-chat-header-padding: var(--wa-chat-header-padding-y) var(--wa-chat-header-padding-x);
    --wa-chat-contact-img-size: 2.5rem;
    --wa-chat-close-size: 1.75rem;
    
    --wa-chat-body-color: #000;
    --wa-chat-body-padding-x: 1rem;
    --wa-chat-body-padding-y: 1rem;
    --wa-chat-body-padding: var(--wa-chat-body-padding-y) var(--wa-chat-body-padding-x);
    
    --wa-chat-btn-border-radius: .25rem;
  }
  
  *,
  *::before,
  *::after {
    box-sizing: border-box;
  }
  
  .whatsapp-chat {
    position: fixed;
    right: var(--wa-chat-button-distance-x);
    bottom: 0;
    width: calc(100vw - var(--wa-chat-button-distance-x) * 2);
    max-width: var(--wa-chat-max-width);
    line-height: 1.25;
    z-index: var(--wa-chat-z-index);
    font-family: var(--wa-chat-font-family);
  }
  
  .whatsapp-chat-is-open {
    display: none;
  }
  
  .whatsapp-chat-is-open:not(:checked) + .whatsapp-chat-window {
    /*transform: scale(.5) translate(calc(100% + var(--wa-chat-button-distance-x) / .5), calc(100% + var(--wa-chat-window-margin-bottom) / .5));*/
    transform: scale(.75) translateY(calc(100% + var(--wa-chat-window-margin-bottom) / .75));
    pointer-events: none;
  }
  
  .whatsapp-chat-button {
    z-index: 1;
    position: absolute;
    right: 0;
    bottom: var(--wa-chat-button-distance-y);
    width: var(--wa-chat-button-size);
    height: var(--wa-chat-button-size);
    border-radius: var(--wa-chat-button-size);
    background: var(--wa-chat-button-color);
    color: var(--wa-chat-white);
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
  }
  
  .whatsapp-chat-window {
    position: absolute;
    right: 0;
    bottom: var(--wa-chat-window-margin-bottom);
    box-shadow: var(--wa-chat-box-shadow);
    /*transform-origin: bottom right;*/
    transform-origin: bottom;
    border-radius: var(--wa-chat-border-radius);
    transition: .4s;
  }
  
  .whatsapp-chat-header {
    background: var(--wa-chat-dark-green);
    color: var(--wa-chat-white);
    display: flex;
    align-items: center;
    padding: var(--wa-chat-header-padding);
    border-radius: var(--wa-chat-border-radius) var(--wa-chat-border-radius) 0 0;
  }
  
  .whatsapp-chat-header > * {
    display: flex;
  }
  
  .whatsapp-chat-contact-img {
    width: var(--wa-chat-contact-img-size);
    height: var(--wa-chat-contact-img-size);
    border-radius: var(--wa-chat-contact-img-size);
    object-fit: cover;
  }
  
  .whatsapp-chat-contact-info {
    -webkit-flex: 1 0 0;
    flex: 1 0 0;
    flex-direction: column;
    padding: 0 1rem;
  }
  
  .whatsapp-chat-close {
    padding: 0.25rem;
    margin-right: -0.25rem;
    cursor: pointer;
    transition: .2s;
  }
  
  .whatsapp-chat-close svg {
    width: var(--wa-chat-close-size);
    height: var(--wa-chat-close-size);
  }
  .whatsapp-chat-close:hover {
    transform: scale(1.1);
    color: var(--wa-chat-light);
  }
  
  .whatsapp-chat-body {
    padding: var(--wa-chat-body-padding);
    font-size: 0.875rem;
    background: url(../images/bg-whatsapp.jpg) no-repeat;
    background-size: cover;
    text-align: center;
    border-radius: 0 0 var(--wa-chat-border-radius) var(--wa-chat-border-radius);
  }
  
  .whatsapp-chat-bubble {
    position: relative;
    z-index: 0;
    margin: 0 auto 0.5rem 0;
    padding: 0.125rem 0 0.25rem;
    border-width: 0.375rem 0.75rem 0.375rem 1.5rem;
    border-style: solid;
    -o-border-image: url(../images/bg-whatsapp-chat-white.png) 8 20 8 30 stretch;
    border-image: url(../images/bg-whatsapp-chat-white.png) 8 20 8 30 stretch;
    color: var(--wa-chat-body-color);
    text-align: left;
  }
  
  @media (min-width: 425px) {
    .whatsapp-chat-bubble {
      width: 85%;
    }
  }
  
  .whatsapp-chat-bubble:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #f9f9f9;
    z-index: -1;
  }
  
  .whatsapp-chat-green-bubble {
    position: relative;
    display: block;
    border-width: 0.375rem 1rem 0.375rem 0.375rem;
    border-style: solid;
    width: 85%;
    -o-border-image: url(../images/bg-whatsapp-chat-green.png) 0 17 3 10 stretch;
    border-image: url(../images/bg-whatsapp-chat-green.png) 0 17 3 10 stretch;
    text-align: left;
    cursor: text;
    margin: 0 0 0 auto;
    color: var(--wa-chat-body-color);
  }
  
  .whatsapp-chat-input {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-clip: padding-box;
    display: block;
    font-weight: 400;
    line-height: 1.5;
    padding: 0.5rem 1rem;
    width: 100%;
    border: 0;
    background: var(--wa-chat-light);
    box-shadow: none;
    outline: none;
    border-radius: 0;
    font-size: inherit;
    color: inherit;
  }
  
  .whatsapp-chat-checkbox {
    display: flex;
    align-items: center;
  }
  
  .whatsapp-chat-checkbox input[type="checkbox"],
  .whatsapp-chat-checkbox input[type="radio"] {
    display: none;
  }
  
  .whatsapp-chat-checkbox .whatsapp-chat-green-bubble {
    cursor: pointer;
  }
  
  .whatsapp-chat-checkbox .whatsapp-chat-green-bubble:before {
    content: '';
    position: absolute;
    top: 50%;
    right: 100%;
    width: 1.125rem;
    height: 1.125rem;
    margin-right: 1.25rem;
    border: 2px solid rgba(0, 0, 0, 0.5);
    border-radius: .25rem;
    transform: translateY(-50%);
    transition: .2s;
  }
  
  .whatsapp-chat-checkbox .whatsapp-chat-green-bubble:hover:before {
    border-color: rgba(0, 0, 0, 0.75);
  }
  
  .whatsapp-chat-checkbox input:checked ~ .whatsapp-chat-green-bubble:before {
    border-color: var(--wa-chat-green);
    background-color: var(--wa-chat-green);
  }
  
  .whatsapp-chat-checkbox input[type="radio"] ~ .whatsapp-chat-green-bubble:before {
    border-radius: 50%;
  }
  
  .whatsapp-chat-checkbox .whatsapp-chat-green-bubble:after {
    content: '';
    position: absolute;
    top: 50%;
    right: 100%;
    width: 0.6rem;
    height: 0.35rem;
    margin-right: 1.375rem;
    margin-top: -0.125rem;
    border-left: 2px solid var(--wa-chat-white);
    border-bottom: 2px solid var(--wa-chat-white);
    transform: rotate(-90deg) translateY(-50%) scale(0);
    transition: .2s;
  }
  
  .whatsapp-chat-checkbox input:checked ~ .whatsapp-chat-green-bubble:after {
    transform: rotate(-45deg) translateY(-50%) scale(1);
    transition: .2s .15s;
  }
  
  .whatsapp-chat-checkbox .whatsapp-chat-green-bubble .whatsapp-chat-input::placeholder {
    transition: .2s;
  }
  
  .whatsapp-chat-checkbox .whatsapp-chat-green-bubble:hover .whatsapp-chat-input::placeholder {
    color: #414141;
  }
  
  .whatsapp-chat-checkbox input:checked ~ .whatsapp-chat-green-bubble .whatsapp-chat-input::placeholder {
    color: var(--wa-chat-dark-green);
  }
  
  .whatsapp-chat-checkbox .whatsapp-chat-input {
    pointer-events: none;
  }
  
  .whatsapp-chat-checkbox .error {
    margin-right: 1.75rem;
  }
  
  .error {
    position: absolute;
    top: 50%;
    right: 100%;
    transform: translateY(-50%);
    margin: 0;
    padding-right: 1rem;
    white-space: nowrap;
  }
  
  .error-icon {
    display: inline-block;
    width: 1.25rem;
    height: 1.25rem;
    color: var(--wa-chat-red);
    vertical-align: middle;
  }
  
  .error-text {
    position: absolute;
    right: 100%;
    display: inline-block;
    font-size: 0.625rem;
    margin: 0 0.5rem 0 0;
    color: var(--wa-chat-red);
    background: var(--wa-chat-red);
    border-radius: var(--wa-chat-btn-border-radius);
    padding: 0.25rem 0.5rem;
    vertical-align: middle;
    pointer-events: none;
    transform: scaleX(0);
    transform-origin: right;
    transition: transform .2s .1s, color .2s;
  }
  
  .error:hover .error-text,
  label:hover .error-text,
  input:focus ~ .error .error-text {
    color: var(--wa-chat-white);
    transform: scaleX(1);
    transition: transform .2s, color .2s .1s;
  }
  
  .whatsapp-chat-btn {
    display: inline-block;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    font-weight: 700;
    line-height: 1.5;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 0;
    padding: 0.5rem 1.5rem;
    margin-top: 1rem;
    border-radius: var(--wa-chat-btn-border-radius);
    background: var(--wa-chat-green);
    color: var(--wa-chat-white);
    transition: .2s;
  }
  
  .whatsapp-chat-btn:hover {
    background: var(--wa-chat-dark-green);
    color: var(--wa-chat-white);
  }
  
  .whatsapp-chat-link {
    display: none;
  }
  
  .text-wa-green {
    color: var(--wa-chat-green);
  }
  
  .text-wa-light-green {
    color: var(--wa-chat-light-green);
  }
  
  @keyframes rotate {
    to { transform: rotate(360deg); }
  }
  
  .loading {
    width: 1rem;
    height: 1rem;
    vertical-align: sub;
    border: .2em solid currentColor;
    border-right-color: transparent;
    border-radius: 50%;
    animation: .75s linear infinite rotate;
  }
</style>
@endpush
