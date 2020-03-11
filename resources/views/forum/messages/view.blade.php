<div class="scroll-box">
    @foreach ($messages as $message)
    <li class="message clearfix" style="list-style-type:none;">
        {{-- Jika pengirim id pesan sama dengan id user yang login, maka statusnya sent --}}
        <div class="{{($message->from == Auth::id()) ? 'sent' : 'received'}} my-2">
            <p>{{$message->message}}</p>
            <p class="date">{{date('d M y, h:i a',strtotime($message->created_at))}}</p>
        </div>
    </li>
    @endforeach
</div>
<div class="input-text">
    <input type="text" name="message" id="message" class="submit form-control my-1"
        placeholder="Tulis pesan kamu disini..." autofocus>
</div>
