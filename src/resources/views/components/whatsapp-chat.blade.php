<div class="whatsapp-chat">
  <div class="collapse" id="collapse-whatsapp-chat">
    <div class="pb-6">
      <div class="shadow-lg">
        <div class="whatsapp-chat-header">
          <div class="d-flex justify-content-between align-items-center">
            <picture>
              <img loading="lazy"
                   decoding="async"
                   src="/images/img-whatsapp-consultor.png"
                   srcset="/images/img-whatsapp-consultor.png, /images/img-whatsapp-consultor@2x.png 2x"
                   alt="Consultor"
                   title="Consultor"
                   width="38"
                   height="38"
                   class="ic-sm- rounded-pill">
            </picture>
            <div>
              <p class="mb-0 flex-grow-1 px-1 lh-18 font-weight-bold">
                <span class="d-block">{{config('admix-whatsapp.atendent')}}</span>
                  {{ config('admix-whatsapp.occupation') }}
              </p>
                <span class="d-inline-block fs-12 lh-16 font-weight-normal">
                  Online
                </span>
            </div>

            <a data-toggle="collapse"
               href="#collapse-whatsapp-chat"
               role="button"
               class="d-inline-block lh-1 align-self-start"
               aria-expanded="false"
               aria-controls="collapse-whatsapp-chat">
               <span class="whatsapp-icon-close ic-close" style="background-image: url('https://rvehaia.local/svg/whatsapp-close.svg');">
                </span>
            </a>
          </div>
        </div>
        <div class="whatsapp-chat-body">
          <p class="whatsapp-chat-bubble fs-14 lh-24">
              {{ config('admix-whatsapp.text') }}
          </p>
          @livewire('frontend::whatsapp-chat',['url' => [ 'routeName' => request()->route()->getName(), 'routeUrl' => request()->path()]])
        </div>
      </div>
    </div>
  </div>

  <a data-toggle="collapse"
     href="#collapse-whatsapp-chat"
     role="button"
     aria-expanded="false"
     aria-controls="collapse-whatsapp-chat"
     title="Entrar em contato"
     class="whatsapp-chat-button">
    <span class="whatsapp-icon" style="background-image: url('https://rvehaia.local/svg/whatsapp.svg');">
    </span>
  </a>
</div>

@push('scripts')
<script>
    $(function () {
        $('.whatsapp-chat-button').on('click', function () {
            $('.collapse').collapse();
        });
        $('.whatsapp-icon-close').on('click', function () {
            $('.collapse').collapse('hide');
        });
    });
    window.addEventListener('whatsapp', event => {
        setTimeout(function(){
            window.open('https://api.whatsapp.com/send?phone={{config('admix-whatsapp.phonenumber')}}','_blank');
        }, 5000);
    });
</script>
@endpush
