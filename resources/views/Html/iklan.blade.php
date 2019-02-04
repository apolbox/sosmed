<h2 class="text-center mt-4">Kabar iklan terbaru</h2>
@foreach($data['iklan'] as $iklan)
    	       <div class="row">
	           <div class="col-md-4 py-3">
	               <div class="card h-md-250">
	                   <div class="card-body">
	                       <h3>
                                {{ $iklan->judul }}
                           </h3>
	                       
	                       <p class="text-justify lead">
	                           @php echo(nl2br($iklan->isi)); @endphp
	                       </p>
	                   </div>
	               </div>
	           </div>
	       </div>
@endforeach