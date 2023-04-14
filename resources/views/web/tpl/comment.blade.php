<div id="comments" class="clearfix">

    <h3 id="comments-title"><span>{{ $count }}</span> Комментарии</h3>

    <!-- Comments List
    ============================================= -->
    <ol class="commentlist clearfix">

    @if(isset($comments))
        @if($comments)
            @foreach($comments as $comment)
            <li class="comment byuser comment-author-_smcl_admin even thread-odd thread-alt depth-1" id="{{ $comment['id'] }}">
                <div id="comment-2" class="comment-wrap clearfix">
                    <div class="comment-meta">
                        <div class="comment-author vcard">
                        <span class="comment-avatar clearfix">
                            <!--img alt='Image' src='' class='avatar avatar-60 photo' height='60' width='60' /-->
                        </span>
                        </div>
                    </div>

                    <div class="comment-content clearfix">
                        <div class="comment-author">{{ $comment['name'] }}<span>{{ date('d-m-Y', strtotime( $comment['created_at'])) }}</span></div>
                        <p>{{ $comment['body'] }}</p>
                        <!--a class='comment-reply-link' href='#'><i class="icon-reply"></i></a-->
                    </div>
                    <div class="clear"></div>
                </div>
            </li>
            @endforeach
        @endif
    @endif
    </ol><!-- .commentlist end -->

    <div class="clear"></div>

    <!-- Comment Form
    ============================================= -->
    <div id="respond">

        <h3>Оставьте <span>Комментарий</span></h3>

        <form class="row" action="{{ route('comment_form') }}" method="post" id="commentform">
            @csrf
            <input type="hidden" name="res_id" id="res_id" value="{{ $id }}" />

            <div class="col-md-6 form-group">
                <label for="name">Имя</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" size="22" tabindex="1" class="sm-form-control" />
                @error('name')<p class="text-red-500">{{ $message }}</p>@enderror
            </div>

            <div class="col-md-6 form-group">
                <label for="mail">Email</label>
                <input type="text" name="mail" id="mail" value="{{ old('mail') }}" size="22" tabindex="2" class="sm-form-control" />
                @error('mail')<p class="text-red-500">{{ $message }}</p>@enderror
            </div>

            <div class="w-100"></div>

            <div class="col-12 form-group">
                <label for="body">Сообщение</label>
                <textarea name="body" cols="58" rows="7" tabindex="4" class="sm-form-control">{{ old('body') }}</textarea>
                @error('body')<p class="text-red-500">{{ $message }}</p>@enderror
            </div>

            <div class="col-12 form-group">
                <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d m-0">Отправить</button>
            </div>
        </form>

    </div>
</div>