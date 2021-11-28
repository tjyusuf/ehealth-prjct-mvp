<div {!! $attributes->merge(['class' => 'bg-white rounded shadow flex py-2 px-3 my-1 items-center text-gray']) !!}>
	@if(isset($icon))
        <p class="flex-inline flex-shrink-0 mr-4">
            <i class="fa fa-{{$icon}} text-base"></i>
        </p>
	@endif    
	<div class="flex-inline w-full">
		<p class="flex text-base font-bold">{{ $title }}</p>
		<p class="flex text-xs md:text-sm text-gray w-full">
			{{(isset($content)) ? $content : '' }}
		</p>
	</div>
	@if(isset($more))
		<p class="flex-inline text-">
			{{ $more }}	
		</p>
	@endif
</div>
