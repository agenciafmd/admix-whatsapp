<form wire:submit.prevent="submit"
      class="needs-validation"
      novalidate>
  <div class="mb-0h text-right">
    <label for="whatsapp-name" class="whatsapp-chat-green-bubble @if(!config('admix-whatsapp.fields.name')) d-none @endif">
      <input wire:model.lazy="name" type="text"
             id="whatsapp-name"
             placeholder="Digite seu nome"
             required
             aria-label="nome"
             class="@error('name') is-invalid @enderror form-control">
      @error('name')
      <span class="invalid-feedback">
        {{ $message }}
      </span>
      @enderror
    </label>
      <label for="whatsapp-email" class="whatsapp-chat-green-bubble @if(!config('admix-whatsapp.fields.email')) d-none @endif">
          <input wire:model.lazy="email" type="text"
                 id="whatsapp-email"
                 placeholder="Digite seu Email"
                 required
                 aria-label="email"
                 class="@error('email') is-invalid @enderror form-control">
          @error('email')
          <span class="invalid-feedback">
        {{ $message }}
      </span>
          @enderror
      </label>
    <label for="whatsapp-cpf" class="whatsapp-chat-green-bubble @if(!config('admix-whatsapp.fields.cpf')) d-none @endif">
      <input wire:model.lazy="cpf" type="text"
             id="whatsapp-cpf"
             placeholder="Digite seu CPF"
             required
             aria-label="cpf"
             class="@error('cpf') is-invalid @enderror form-control js-mask-cpf">
      @error('cpf')
      <span class="invalid-feedback">
        {{ $message }}
      </span>
      @enderror
    </label>
    <label for="whatsapp-phone" class="whatsapp-chat-green-bubble @if(!config('admix-whatsapp.fields.phone')) d-none @endif">
      <input wire:model.lazy="phone" type="tel"
             id="whatsapp-phone"
             placeholder="Digite seu celular/WhatsApp"
             required
             aria-label="telefone"
             class="@error('phone') is-invalid @enderror form-control js-mask-phone">
      @error('phone')
      <span class="invalid-feedback">
        {{ $message }}
      </span>
      @enderror
    </label>
    <div class="mb-0 d-inline-block border-0 whatsapp-chat-green-bubble  @if(!config('admix-whatsapp.fields.newsletter')) d-none @endif">
      <div class="mb-0 custom-control custom-checkbox">
        <input wire:model.lazy="newsletter"
               type="checkbox"
               class="custom-control-input @error('newsletter') is-invalid @enderror"
               id="whatsapp-newsletter"
               aria-describedby="newsletterLabel"
               required>
        <label class="custom-control-label regular-text d-inline-block lh-25"
               for="whatsapp-newsletter">
          Eu aceito receber ofertas e notícias
        </label>
        @error('newsletter')
        <span class="pl-1h invalid-feedback bg-transparent">
          {{ $message }}
        </span>
        @enderror
      </div>
    </div>
  </div>

  <div class="text-center">
    <button type="submit"
            wire:loading.attr="disabled"
            wire:target="submit"
            aria-label="Iniciar conversa"
            class="py-0hq btn whatsapp-chat-btn-submit text-uppercase fs-16 btn-block fs-small">
      <span wire:loading.remove
            wire:target="submit">
        Iniciar conversa
      </span>
      <span wire:loading
            wire:target="submit"
            class="spinner-border spinner-border-sm text-white"
            role="status"
            aria-hidden="true"></span>
    </button>
  </div>
</form>
