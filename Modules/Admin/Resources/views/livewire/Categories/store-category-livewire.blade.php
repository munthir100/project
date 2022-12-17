<div>
    <form id="addCategoryValidation" class="row gy-1 gx-2 mt-75" wire:submit.prevent="save">
        <div class="col-md-6">
            <label class="form-label" for="Title">Title</label>
            <div class="input-group input-group-merge">
                <input id="Title" wire:model="title" class="form-control add-credit-card-mask" type="text" placeholder="1356 3215 6548 7898" aria-describedby="modalAddCard2" data-msg="Please enter your credit card number" />

            </div>
            @error('title') <small class="text-danger"> {{$message}} </small> @enderror
        </div>

        <div class="col-md-6 mb-1">
            <label class="form-label" for="select2-multiple">Parent Category</label>
            <select wire:model="parent_id" class="form-select" id="basicSelect">
                <option>IT</option>
                <option>Blade Runner</option>
                <option>Thor Ragnarok</option>
            </select>
            @error('parent_id') <small class="text-danger"> {{$message}} </small> @enderror
        </div>



        <div class="col-12">
            <div class="d-flex align-items-center">
                <div class="form-check form-switch form-check-primary me-25">
                    <input type="checkbox" class="form-check-input" id="saveCard" checked />
                    <label class="form-check-label" for="saveCard">
                        <span class="switch-icon-left"><i data-feather="check"></i></span>
                        <span class="switch-icon-right"><i data-feather="x"></i></span>
                    </label>
                </div>
                <label class="form-check-label fw-bolder" for="saveCard">Save Card for future billing?</label>
            </div>
        </div>

        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-1 mt-1">Submit</button>
            <button type="reset" class="btn btn-outline-secondary mt-1" data-bs-dismiss="modal" aria-label="Close">
                Cancel
            </button>
        </div>
    </form>
</div>