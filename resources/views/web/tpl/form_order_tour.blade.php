<div id="comments" class="clearfix">
    <div class="clear"></div>

    <div id="respond">

        <h3>Отправить <span>Заявку</span></h3>

        <form class="row" action="{{ route('order_tour_form') }}" method="post" id="commentform">
            
            @csrf
            <input type="hidden" name="tour_id" id="tour_id" value="{{ $id }}" />
            @error('tour_id')<p class="text-red-500">{{ $message }}</p>@enderror

            <div class="col-md-6 form-group">
                <label for="name">Имя</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" size="22" tabindex="1" class="sm-form-control" />
                @error('name')<p class="text-red-500">{{ $message }}</p>@enderror
            </div>

            <div class="col-md-6 form-group">
                <label for="familie">Фамилие</label>
                <input type="text" name="familie" id="familie" value="{{ old('familie') }}" size="22" tabindex="1" class="sm-form-control" />
                @error('familie')<p class="text-red-500">{{ $message }}</p>@enderror
            </div>

            <div class="col-md-6 form-group">
                <label for="mail">Email</label>
                <input type="text" name="mail" id="mail" value="{{ old('mail') }}" size="22" tabindex="2" class="sm-form-control" />
                @error('mail')<p class="text-red-500">{{ $message }}</p>@enderror
            </div>

            <div class="col-md-6 form-group">
                <label for="phone">Телефон</label>
                <input type="text" name="phone" id="phone" value="{{ old('phone') }}" size="22" tabindex="2" class="sm-form-control" />
                @error('phone')<p class="text-red-500">{{ $message }}</p>@enderror
            </div>

            <div class="w-100"></div>

            <div class="col-12 form-group">
                <button name="submit" type="submit" id="submit-button" tabindex="5" value="order_tour_form" class="button button-3d m-0">Отправить</button>
            </div>
        </form>
    </div>
</div>