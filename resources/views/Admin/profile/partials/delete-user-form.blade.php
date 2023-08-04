<section class="space-y-6">
	<header>
		<h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
			Delete Account
		</h2>

		<p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
			Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your
			account, please download any data or information that you wish to retain.
		</p>
	</header>

	<!-- Trigger modal -->
	<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmUserDeletionModal">
		Delete Account
	</button>


	<div class="modal fade text-dark" id="confirmUserDeletionModal" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title fs-5">Are you sure you want to delete your account?</h2>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body p-3">
					<form method="POST" action="{{ route('admin.profile.destroy') }}">
						@csrf
						@method('delete')

						<p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
							Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your
							password to confirm you would like to permanently delete your account.
						</p>

						<div class="mt-6">
							<label for="password" class="sr-only">Password</label>
							<input id="password" name="password" type="password" class="my-3 block w-3/4" placeholder="Password" />
						</div>

						<div class="mt-6 flex justify-end">
							@if ($errors->any())
								<button type="button" class="btn btn-danger ml-3" data-bs-toggle="modal" data-bs-target="#errorModal">
									Delete Account
								</button>
							@else
								<button type="submit" class="btn btn-danger ml-3">
									Delete Account
								</button>
							@endif
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="errorModal" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title fs-5" id="exampleModalToggleLabel2">ERROR</h2>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<ul id="errorMessages" class="text-danger py-2">
						@if ($errors->any()) {
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
							}
						@endif
					</ul>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>




{{-- <section class="space-y-6">
	<header>
		<h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
			{{ __('Delete Account') }}
		</h2>

		<p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
			{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
		</p>
	</header>

	<x-danger-button x-data=""
		x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">{{ __('Delete Account') }}</x-danger-button>

	<x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
		<form method="post" action="{{ route('admin.profile.destroy') }}" class="p-6">
			@csrf
			@method('delete')

			<h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
				{{ __('Are you sure you want to delete your account?') }}
			</h2>

			<p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
				{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
			</p>

			<div class="mt-6">
				<x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

				<x-text-input id="password" name="password" type="password" class="mt-1 block w-3/4"
					placeholder="{{ __('Password') }}" />

				<x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
			</div>

			<div class="mt-6 flex justify-end">
				<x-secondary-button x-on:click="$dispatch('close')">
					{{ __('Cancel') }}
				</x-secondary-button>

				<x-danger-button class="ml-3">
					{{ __('Delete Account') }}
				</x-danger-button>
			</div>
		</form>
	</x-modal>
</section> --}}
