<div class="modal fade" id="confirmDelete" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<form method="post" action="{{ $href }}">
				{{ csrf_field() }}
				{{ method_field('DELETE') }}
				<div class="fields">
				</div>
				<div class="modal-header text-center">
					<h5 class="modal-title w-100" id="confirmDeleteLabel">Are You Sure?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Really delete <span class="delete-count"></span> {{ $title }}?
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
					<button type="submit" class="btn btn-primary">Yes</button>
				</div>
			</form>
		</div>
	</div>
</div>