<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                @foreach ($contacts as $contact)
                    <div class="section-title left">
                        <h2>{{$contact->titre}}</h2>
                    </div>
                    <p>{{$contact->description}}</p>
                    <h3 class="mt60">{{$contact->soustitre}}</h3>
                    <p class="con-item">{{$contact->adresse1}}</p>
                    <p class="con-item">{{$contact->adresse2}}</p>
                    <p class="con-item">{{$contact->telephone}}</p>
                    <p class="con-item">{{$contact->mail}}</p>
                @endforeach
            </div>
            <!-- contact form -->
            <div class="col-md-6 col-pull">
                <form class="form-class" id="con_form" action="{{route('mail')}}" method="POST">
                    @csrf
                    <input type="hidden" name="contactStore" id="contactStore">
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" id="name" name="name" placeholder="Your name">
                            @error('name')
                            <span class="text-red-400">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror                
                        </div>
                        <div class="col-sm-6">
                            <input type="text" id="mail" name="mail" placeholder="Your email">
                            @error('mail')
                            <span class="text-red-400">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror                
                        </div>
                        <div class="col-sm-12">
                            <label class="hidden" for="subject"></label>
                            <input type="text" id="subject" name="subject" placeholder="Subject">
                            @error('subject')
                            <span class="text-red-400">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror                
                            <textarea id="message" name="message" placeholder="Message"></textarea>
                            @error('message')
                            <span class="text-red-400">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror                
                            <button type="submit" class="site-btn">send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end-->