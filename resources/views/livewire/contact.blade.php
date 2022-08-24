<div class="col-lg-6">
    <div class="px-40 py-40 bg-white border-light shadow-1 rounded-8 contact-form-to-top">
        <h3 class="text-24 fw-500">Send a Message</h3>
        <p class="mt-25">Neque convallis a cras semper auctor. Libero id faucibus nisl<br> tincidunt egetnvallis.</p>

        <form class="contact-form row y-gap-30 pt-60 lg:pt-40" wire:submit.prevent="submit">
            @csrf
            <div class="col-12">
                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('home.name')}}</label>
                <input @error('name') class="is-invalid" @enderror type="text" wire:model="name" placeholder="{{__('user.Enter the full name')}}" required autocomplete="off">
                @error('name') <div class="invalid-feedback">{{$message}}</div> @enderror
            </div>

            <div class="col-12">
                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('home.email')}}</label>
                <input @error('email') class="is-invalid" @enderror type="email" wire:model="email" placeholder="{{__('home.Enter your email')}}" required autocomplete="off">
                @error('email') <div class="invalid-feedback">{{$message}}</div> @enderror
            </div>

            <div class="col-12">
                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('home.phone')}}</label>
                <input @error('phone') class="is-invalid" @enderror type="text" wire:model="phone" placeholder="{{__('user.Enter your phone number')}}" required autocomplete="off">
                @error('phone') <div class="invalid-feedback">{{$message}}</div> @enderror
            </div>

            <div class="col-12">
                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('home.topic')}}</label>
                <input @error('topic') class="is-invalid" @enderror type="text" wire:model="topic" placeholder="{{__('home.enter topic')}}" required autocomplete="off">
                @error('topic') <div class="invalid-feedback">{{$message}}</div> @enderror
            </div>

            <div class="col-12">
                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('home.Message')}}</label>
                <textarea name="comment" wire:model="message" placeholder="{{__('home.Enter Message')}}" required rows="8"></textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="button -md -purple-1 text-white">
                    Send Message
                </button>
            </div>
        </form>
    </div>
</div>
