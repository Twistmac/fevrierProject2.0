@if($lengthAwarePaginator->lastpage() != '1' )
	<div class="pagination pagination-boo pull-right">
	    <ul>
	    	@if($lengthAwarePaginator->currentPage() == '1')
	    		 <li class="disabled"><a href="#">Prev</a></li>
	    	@else
	    		<li><a href="javascript:history.back()">Prev</a></li>
	    	@endif

	    	@for($i=1;$i<=$lengthAwarePaginator->lastpage();$i++)
	    		@if($lengthAwarePaginator->currentPage() == $i)
	    			<li class="active"><a href="#">{{$i}}</a></li>
	    		@else
	    			<li><a href="{{ URL::to(Request::path()).'?page='.$i }}">{{$i}}</a></li>
	    		@endif
			        
	        @endfor

	        @if($lengthAwarePaginator->currentPage() == $lengthAwarePaginator->lastPage())
	        	<li class="disabled"><a href="#">Next</a></li>
	        @else
	        	<li><a href="#">next</a></li>
	        @endif

	    </ul>
	</div>
@endif