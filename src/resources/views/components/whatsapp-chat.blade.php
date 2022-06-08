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
