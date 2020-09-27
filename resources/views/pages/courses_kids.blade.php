@extends('layouts.app')

@section('content')
<div class="bg-light">
  <div class="d-flex flex-row container">
    <section class="w-75 course-main">
        <section class="py-5">
            <div class="pt-5 text-left py-3">
                <h1 class="pb-3 text-center">Engleski za decu</h1>
                <p>Kursevi za školski uzrast ( od 7-17 godina) su izuzetno dinamični, interesantni i sa pažljivo izabranim programima, kako bi teme bile što aktuelnije i prilagođene interesovanju za odgovarajuće godine.</p>
                  
                <p>Gradivo se usvaja kroz raznovrsne interaktivne aktivnosti i uz savremene udžbenike, u prijatnoj atmosferi i uz diplomirane profesore koji pažljivo brinu o svakom polazniku. Poseban akcenat u nastavi se stavlja na razvijanje sposobnosti komunikacije i usmeno izražavanje, uz pažljivo osmišljen metodološki pristup. Istovremeno, od učenika se traži kontinuirani rad, podvrgnuti su čestim proverama znanja i očekuje se njihovo maksimalno angažovanje.</p>
                  
                <p> Grupe se pažljivo formiraju, tako da se za svaku grupu bira program koji je najbolji za odgovarajući uzrast i nivo znanja.</p>
                  
                <p>Časovi za školski uzrast odvijaju se dva puta nedeljno po 50/75/90 minuta, u zavisnosti od uzrasta i nivoa znanja.</p>
                  
                <div class="pt-5">
                  <h3>Specifikacije kursa</h3>
                  <ul>
                    <li>Dužina kursa: 9 meseci</li>
                    <li>Broj časova: 68/136</li>
                    <li>Koliko puta nedeljno: 2</li>
                    <li>Dužina časa: 50/60/75/90 minuta</li>
                  </ul>                 
                </div>
     
            </div>
        </section>

        <section class="py-5 bg-light">
          <h1 class="text-center">Česta pitanja</h1>
          <div class="container py-5">
            <button class="accordion">Da li pratite školski program?</button>
            <div class="panel">
              <p>Iako radimo po drugačijim udžbenicima, uglavnom se prelaze iste jezičke jedinice kao i u školi. Međutim, dosta toga zavisi od grupe i od toga koliko dugo polaznik uči jezik. Ukoliko dete uči engleski od malih nogu, školsko gradivo mu ne predstavlja nikakav problem, budući da mi idemo u napred i svo gradivo koje se radi u školi je dete već prešlo. Međutim, ukoliko dete krene da uči jezik kasnije ili ukoliko se desi da gradivo koje se radi u školi nije pređeno na časovima, nastavnik je uvek tu da mu pomogne. Trudimo se da svojim učenicima uvek obezbedimo najbolje, tako da je nastavnik uvek tu da održi dodatni čas i da pruđi pomoć ukoliko je učeniku potrebna, ili da obezbedi dodatno vežbanje pre kontrolnih i pismenih.</p>
            </div>

            <button class="accordion">Da li se deca mogu priključiti grupi i posle upisa, u toku školske godine?</button>
            <div class="panel">
              <p>Ukoliko dete poseduje neko predznanje engleskog jezika, može se prikjučiti našim već postojećim grupama, ukoliko u grupi ima mesta. Prvo se radi testiranje, kako bismo odredili tačan nivo deteta, i prva dva časa su probna, kako bi i polaznik i nastavnik videli da li detetu odgovara grupa i nivo.</p>
            </div>

            <button class="accordion">Ko su predavači u vašoj školi?</button>
            <div class="panel">
              <p>Svi predavači u školi Rubicon su diplomirani profesori engleskog jezika. Velika pažnja se pridaje obuci profesora i pripremanju nastave, a profesori se konstantno usavršavaju pohađajući seminare, i implementirajući najnovije metode u nastavu.</p>
            </div>  

            <button class="accordion">Da li su udžbenici uključeni u cenu?</button>
            <div class="panel">
              <p>Udžbenici nisu uklučeni u cenu. Udžbenici i radni listovi se nabavljaju preko naše škole.</p>
            </div>    
          </div>
        </section>    
      </section>


      <aside class="w-25 bg-light py-5">

        <section class="pt-5 pb-3">
          <div class="bg-green px-3 py-4">
            <h4>Newsletter</h4>
            <form action="" method="" class="footer-subscribe">
              <div>
                  <input type="email" name="email" id="email" placeholder="Your email" required>
              </div>
              <div class="">
                  <button class="button" type="submit">Subscribe</button>
              </div> 
            </form> 
          </div>    
        </section>
        
        <section class="py-5">
          <div class="aside">
            <h4 class="aside-title white-text">Nasi kursevi</h4>
              <a href="">Engleski za decu</a>
              <a href="">Engleski za tinejdzere</a>
              <a href="">Engleski za odrasle</a>
              <a href="">Kursevi konverzacije</a>
              <a href="">Kembridz ispiti</a>
          </div>
        </section>

        <section class="py-5">
          <h4>Blog</h4>
          <div class="blog-aside pb-3">
            <div class="">
                <a href=""><img src="../assets/images/header.jpg" alt=""></a>
            </div>
            <div class="blog-text py-2">
                <div class="mb-auto">
                    <h5 class="font-weight-bold"><a href="">Post title Lorem ipsum dolor sit amet consectetur.</a></h5>
                </div>
                <div class="d-flex justify-content-between mb-auto">
                    <p class="small green-text"><a href="" class="green-text">Category</a><span> | </span>September 2020</p>
                </div>
            </div>
          </div> 
          <div class="blog-aside">
            <div class="">
                <a href=""><img src="../assets/images/header.jpg" alt=""></a>
            </div>
            <div class="blog-text py-2">
                <div class="mb-auto">
                    <h5 class="font-weight-bold"><a href="">Post title Lorem ipsum dolor sit amet consectetur.</a></h5>
                </div>
                <div class="d-flex justify-content-between mb-auto">
                    <p class="small green-text"><a href="" class="green-text">Category</a><span> | </span>September 2020</p>
                </div>
            </div>
          </div> 
        </section>
      </aside>
      
    </div>
</div>

  
@endsection

