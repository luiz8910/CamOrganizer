<div class="card pb-2.5">
    <div class="card-header" id="basic_settings">
        <h3 class="card-title">Redes</h3>
    </div>
    <div class="card-body grid gap-5">
        @foreach(['mac', 'ip', 'mask', 'gateway'] as $field)
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                <label class="form-label max-w-56">{{ ucfirst($field) }}</label>
                @if(isset($edit))
                    <input class="input" name="network[{{ $field }}]" placeholder="{{ ucfirst($field) }}" type="text"
                           value="@if(isset($equipment->network)){{ $equipment->network[0]->{$field} }}@endif" />
                @else
                    <input class="input" name="network[{{ $field }}]" placeholder="{{ ucfirst($field) }}" type="text" value="{{ old('network.' . $field) }}" />
                @endif
                @error("network.$field") <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        @endforeach
    </div>
</div>
<div class="card pb-2.5">
    <div class="card-header" id="basic_settings">
        <h3 class="card-title">
            Rede Adicional
        </h3>
        <div class="flex items-center gap-2">
            <label class="switch switch-sm">
                                        <span class="switch-label">
                                            Redes 2
                                        </span>
                <input type="checkbox" value="1" id="additional_fields_check" @if(isset($equipment->network[1])) checked @endif />

            </label>
        </div>
    </div>
    @if(isset($equipment->network[1]))
        <div class="card-body grid gap-5" id="additional_fields">
            @else
                <div class="card-body grid gap-5 hidden" id="additional_fields">
                    @endif
                    @foreach(['mac', 'ip', 'mask', 'gateway'] as $input)
                        <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                            <label class="form-label max-w-56">{{ ucfirst($input) }}</label>
                            @if(isset($edit))
                                <input class="input" name="network_add[{{ $input }}]" placeholder="{{ ucfirst($input) }}" type="text"
                                       value="@if(isset($equipment->network[1])){{ $equipment->network[1]->{$input} }}@endif" />
                            @else
                                <input class="input" name="network_add[{{ $input }}]" placeholder="{{ ucfirst($input) }}" type="text" value="{{ old('network_add.' . $input) }}" />
                            @endif
                            @error("network_add.$input") <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    @endforeach
                </div>
        </div>
