<input type="checkbox" class="form-check-input" 
wire:change="sync_benefits({{ $item->id }})"
value="{{ $item->id }}"
id="{{$item->id}}"
{{ $item->checked == 1 ? 'checked' : '' }}>