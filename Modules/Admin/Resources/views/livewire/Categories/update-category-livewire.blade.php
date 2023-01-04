<div>
    <form wire:submit.prevent="save">
        <div class="col-12" style="text-align: end;">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" wire:model="is_active">
                <label class="form-check-label" for="inlineCheckbox1">Publish in store</label>
            </div>
        </div>
        <div class="mb-1">
            <label class="form-label" for="basicSelect">category</label>
            <select class="form-select" id="basicSelect" wire:model="parent_id">
                @if ($category->parent_id != null)
                <option value="{{$category->parent_id}}" selected>{{$category->parent->title}}</option>
                @else
                <option value="">None</option>
                @endif
                @if ($category->parent_id != null)
                <option value="">None</option>
                @endif
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
            @error('parent_id')<small class="text-danger">{{$message}}</small>@enderror
        </div>

        <div class="mb-1">
            <label class="form-label" for="disabledSelect">title</label>
            <input wire:model="title" type="text" class="form-control" id="basicInput" placeholder="Enter title">
            @error('title')<small class="text-danger">{{$message}}</small>@enderror
        </div>

        <div class="col-12" style="text-align: end;">
            <button class="btn btn-primary" type="submit">save</button>
        </div>
    </form>
</div>