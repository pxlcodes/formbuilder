@if( config('formbuilder.model.'.$form)!==null)
	@if( config('formbuilder.form_builder_enable') )
		@if(config('formbuilder.form_tag') )
			@foreach( config('formbuilder.model.'.$form.'.action.route') as $routes)
				@php
				$update = $routes['update']??'';
				$store = $routes['store']??'';
				$destroy = $routes['destroy']??'';
				@endphp
			@endforeach
			<form
					@isset($action)
					@if($action!=="create")
					@isset($data)
					action="{{ route($update, $data) }}"
					@else
					action="#"
					@endisset
					@endif
					action="{{ route( $store ) }}"
					@endisset
					method="post"
					@if( config('formbuilder.model.'.$form.'.action.file') )
					enctype="multipart/form-data"
					@endif
			>
				@endif
				@foreach( config('formbuilder.model.'.$form.'.field') as $field)
					@php
						$tag = $field['tag']??'input';
						$type = $field['type']??'text';
						$label = $field['label']??false;
						$name = $field['name'];
						$placeholder = $field['placeholder']??'';
						$class =  $field['class']??'';
						$display =  $field['display']??'';
					@endphp
					<div class="form-row">
						<div class="form-group col-md-12">
							@isset($label)
								<label for="{{$tag.$name}}">{{$label}}</label>
							@endisset
							@if($tag=='textarea')
								<textarea
										type="{{$type}}"
										name="{{ $name}}"
										placeholder="{{$placeholder}}"
										class="{{ $class}} {{ $errors->first($name)?'is-invalid':'' }}"
										{{ $display }}
								>{{ old($name)??$data->$name}}</textarea>
							@else
								<input
										type="{{$type}}"
										name="{{ $name}}"
										placeholder="{{$placeholder}}"
										class="{{ $class}} {{ $errors->first($name)?'is-invalid':'' }}"
										value="{{ old($name)??$data->$name}}"
										{{ $display }}
								/>
							@endif
							@if($errors->first($name))
								<div class="invalid-feedback">
									{{$errors->first($name)}}
								</div>
							@endisset
						</div>
					</div>
				@endforeach
				
				@if(config('formbuilder.display_submit_button'))
					@csrf
					@isset($action)
						@if($action!=="create")
							@method('PATCH')
						@endif
					@endisset
					<div class="btn-toolbar mb-2 mb-md-0 ">
						<div class="btn-group mr-2">
							<button type="submit" class="btn btn-md btn-outline-secondary">
								@if(config('formbuilder.dynamic_submit_button_name'))
									@isset($action)
										@if($action=='create')
											Create
										@elseif($action=='update')
											Update
										@endif
									@endisset
								@else Submit @endif
							</button>
						</div>
					</div>
				@endif
				@if(config('formbuilder.form_tag') )</form>@endif
	@else
		<h1>Form Builder Is Disabled </h1>
		<p>Enable Form Builder </p>
	@endif
@else
	<p class="text-muted">Sorry! Please Create {{ $form }} form in formbuilder config file</p>
@endif