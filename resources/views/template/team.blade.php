<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>{{$team[0]->titre}}</h2>
        </div>
        <div class="row">
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="img/team/1.jpg" alt="">
                    <h2>{{$teamC[1]->nom}}</h2>
                    <h3>{{$teamC[1]->poste->titre}}</h3>
                </div>
            </div>
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="img/team/2.jpg" alt="">
                    <h2>{{$centre[0]->nom}}</h2>
                    <h3>{{$centre[0]->poste->titre}}</h3>
                </div>
            </div>
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="img/team/3.jpg" alt="">
                    <h2>{{$teamC[0]->nom}}</h2>
                    <h3>{{$teamC[0]->poste->titre}}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team Section end-->