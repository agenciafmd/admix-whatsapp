<form wire:submit.prevent="submit"
      class="needs-validation"
      novalidate>
  @if(config('admix-whatsapp.fields.name'))
  <label for="whatsapp-name" class="whatsapp-chat-green-bubble">
    <input wire:model.lazy="name" type="text"
           id="whatsapp-name"
           placeholder="Digite seu nome"
           required
           aria-label="nome"
           class="whatsapp-chat-input" >
    @error('name')
    <span class="error">
      <span class="error-text">
        {{ $message }}
      </span>
      <svg class="error-icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zm-248 50c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z"/></svg>
    </span>
    @enderror
  </label>
  @endif
  @if(config('admix-whatsapp.fields.email'))
  <label for="whatsapp-email" class="whatsapp-chat-green-bubble">
    <input wire:model.lazy="email" type="text"
           id="whatsapp-email"
           placeholder="Digite seu e-mail"
           required
           aria-label="email"
           class="whatsapp-chat-input" >
    @error('email')
    <span class="error">
        <span class="error-text">
          {{ $message }}
        </span>
        <svg class="error-icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zm-248 50c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z"/></svg>
      </span>
    @enderror
  </label>
  @endif
  @if(config('admix-whatsapp.fields.cpf'))
  <label for="whatsapp-cpf" class="whatsapp-chat-green-bubble">
    <input wire:model.lazy="cpf" type="text"
           id="whatsapp-cpf"
           placeholder="Digite seu CPF"
           required
           aria-label="cpf"
           class="whatsapp-chat-input wa-chat-mask-cpf">
    @error('cpf')
    <span class="error">
      <span class="error-text">
        {{ $message }}
      </span>
      <svg class="error-icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zm-248 50c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z"/></svg>
    </span>
    @enderror
  </label>
  @endif
  @if(config('admix-whatsapp.fields.phone'))
  <label for="whatsapp-phone" class="whatsapp-chat-green-bubble">
    <input wire:model.lazy="phone" type="tel"
           id="whatsapp-phone"
           placeholder="Digite seu celular/WhatsApp"
           required
           aria-label="telefone"
           class="whatsapp-chat-input wa-chat-mask-phone">
    @error('phone')
    <span class="error">
      <span class="error-text">
        {{ $message }}
      </span>
      <svg class="error-icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zm-248 50c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z"/></svg>
    </span>
    @enderror
  </label>
  @endif
  @if(config('admix-whatsapp.fields.newsletter'))
  <div class="whatsapp-chat-checkbox">
    <input wire:model.lazy="newsletter"
           type="checkbox"
           id="whatsapp-newsletter" >
    <label class="whatsapp-chat-green-bubble" for="whatsapp-newsletter">
      <span class="whatsapp-chat-input">
        Eu aceito receber ofertas e not??cias
      </span>
      @error('newsletter')
      <span class="error">
            <span class="error-text">
              {{ $message }}
            </span>
            <svg class="error-icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zm-248 50c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z"/></svg>
          </span>
      @enderror
    </label>
  </div>
  @endif
  
  <button type="submit"
          wire:loading.attr="disabled"
          wire:target="submit"
          aria-label="Iniciar conversa"
          class="whatsapp-chat-btn">
    <span wire:loading.remove
          wire:target="submit">
      Iniciar conversa
    </span>
    <span wire:loading
          wire:target="submit"
          class="loading"
          role="status"
          aria-hidden="true"></span>
  </button>
</form>
