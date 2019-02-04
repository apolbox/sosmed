<h2 class="text-center">Mengapa Kami ?</h2>
@foreach($data['whyus'] as $whyus)
    <div class="row">
        <div class="col-md-6 col-sm-9 col-xs-12 py-3">
            <div class="card card-default h-100">
                <div class="card-header">
                    <h4 class="text-center text-muted">
                        {{ $whyus->judul }}
                    </h4>
	           </div>
	           <div class="card-body">
	               <p class="text-justify lead">
	                   <span>{{ substr($whyus->isi,0,177) }}</span>
	                   <a href="{{ url('/iklan/') . '/' . $whyus->judul }}">Baca selengkapnya...</a>
	               </p>
	           </div>
	       </div>
	   </div>
    </div>
@endforeach