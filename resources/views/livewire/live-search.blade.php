<div>
    <h1>Find a Contact</h1>
    {{ $name }}
    <div class="input-group mb-3">
   		<input type="text" wire:model="name" class="form-control" placeholder="Find a contact" id="" aria-label="Find a contact" aria-describedby="basic-addon2" autocomplete="off">
   		<div class="input-group-append">
   			<span class="input-group-text" id="basic-addon2">Search</span>
   		</div>
   </div>
   <div class="list-group mt-2">
   		@foreach ($contacts as $contact)
   			<div class="list-group-item list-group-item-action">
   				<div class="d-flex w-100 justify-content-between">
   					<h5 class="mb-1">{{ $contact['name'] }}</h5>
   					<small class="text-muted">{{ $contact['email'] }}</small>
   				</div>
   				<p class="mb-1">{{ $contact['city'] }}</p>
   				<small class="text-muted">{{ $contact['phone'] }}</small>
   			</div>
   		@endforeach
   </div>
</div>
