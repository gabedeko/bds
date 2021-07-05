{{--
  Template Name: Initiative Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

  <div class="bd-hero bd-hero-2 container-fluid mt-2">
    <div class="row bd-hero-top">
        <div class="col-md-4 bd-hero-top-left">
        <div class="bd-hero-border"></div>
        <div class="bd-hero-date"></div>
        </div>
        <?php /*
        <div class="col-md-8 bd-hero-top-right" style="background-image:url(@asset('images/placeholder/bd_placeholder_32.jpg'))">
        
        </div>
        */ ?>
    </div>
    <div class="row bd-hero-btm">
        <div class="col-md bd-hero-btm-left">
            <h1 class="bd-hero-title"><i class="fas fa-circle"></i> BDS Initiatives</h1>
        </div>
        <div class="col-md bd-hero-btm-right">
            
        </div>
    </div>
</div>

<div class="init-content-container container-fluid">
    
  <div class="init-content-row row justify-content-md-center">
      <div class="init-content-col col-md-9 text-center">
      <h2>BDS Kiki - for young African American Dance Artists</h2>
      <p class="body-2 mt-3" style="text-align: center;">“There are almost no live dance performances taking place right now. An invaluable part of these live performances are the conversations we emerging artists get to have with choreographers and artists, after a performance. Because of COVID, these conversations have stopped happening in this way. Thus! Black Dance Stories Kiki was born. I remember telling Charmaine and Kimani about how nerve-racking it can be to network after a performance. So we came together and thought of the Kiki. The artists that have been a part of Black Dance Stories come back and mentor these young emerging artists."</p>
      <p class="body-2" style="text-align: center;"><span style="font-weight: 400;">- Nicholas Hall (Founding Team Member)</span></p>

      <p class="mt-5">By invitation only, BDS Kiki is an evening shared with seasoned artists and upstarts in the field of dance. For two hours, in two breakout sessions, young African American dance artists get to be up close, network, talk about their experiences, ask questions and envision their ideas openly in this safe space.  BDS Kiki sessions are held approximately every three to four months.</p>

      <a href="https://docs.google.com/forms/d/e/1FAIpQLSe0py0_jyBLYoCNOZBWd1n_hegljqmVltobcMznhT9dEO2gRw/viewform" target="_blank"><button type="button" class="btn bd-btn-1 btn-lg mt-2"> Click Here to Register</button></a>
      </div>
  </div>

  <div class="init-content-row row justify-content-md-center mt-5">
      <div class="init-content-col col-md-9 text-center">
      <h2>BDS in universities - Course Description</h2>
      <p class="mt-3" style="text-align: center;">The course meets once virtually and includes an hour with the BDS core team. In that hour we offer a warm up and discussions around the tacit beginnings of BDS, our creative format, and we view a chosen episode. The second hour will be spent with the guests from the chosen episode, guided by topics specific to their “Black Dance Stories,” a breather (away from the  computer), and finally a Q & A with the BDS team and the guests.</p>
     
      <h4 class="mt-4">Bates College</h4>

      <p class="body-2 mt-3" style="text-align: center;">"Bates College Dance invited the whole Black Dance Stories producing team to meet with our Dance History course this Fall and that visit informed the whole semester ahead. We began the semester discussing current events in Dance, made so visible in the Black Lives matter protests of the summer and the demands of the Dance community to take a deep look inside  structural biases that continue to marginalize and harm Black and Indiginous and People of Color artists. Black Dance stories arrived so perfectly to uplift and broadcast the stories of Black artists as told by the artists themselves. The BDS team visited our History class along with two of the artists from one of the episodes assigned to our students. It was amazing to have them take charge of the class and draw the students into a lively discussion about the program and the artists. The student referred to this shared experience throughout the semester, quoting the day in papers and discussions. I would totally recommend bringing this team and these stories, as they are lived in this moment, into your classrooms."</p>
      <p class="body-2" style="text-align: center;"><span style="font-weight: 400;">- Carol Dilley, Chair, Department of Theater and Dance/Director of Dance</span></p>
      <h4 class="mt-4">BRING BDS to your University/College</h4>
      
      <a href="mailto:blackdancestories.info@gmail.com"><button type="button" class="btn bd-btn-1 btn-lg mt-2">Email Us</button></a>
      </div>
      
  </div>

</div>

  <div class="initiative-container container-fluid">
    <?php echo the_content(); ?>
  </div>
  @endwhile
@endsection
