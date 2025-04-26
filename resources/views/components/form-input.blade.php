<div class="form-group">
    <label for="">{{$label}}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="" class="form-control" placeholder="" aria-describedby="helpId"
        value="{{ old($name) }}" />
    <span class="text-danger">
        <!-- @error('name')
            {{ $message }}
        @enderror -->
    </span>
</div>