<div>
    @php
        $session = session()->get('type');
    @endphp
    @foreach ($types as $type)
        @php
            $droits = $type->droits;
            $button = false;
            foreach ($droits as $droit) {
                $droit_role = DB::table('droit_role')
                    ->where('droit_id', $droit->id)
                    ->where('role_id', Auth::user()->role->id)
                    ->get();
                if (count($droit_role)) {
                    $button = true;
                }
            }
        @endphp
        @if ($button)

            <button type="button" class="btn btn-primary p-1 fw-bold {{ $type->id == $session ? '' : 'active' }}"
                wire:click='type({{ $type->id }})'><i class="bi bi-gear fs-5 me-1 "></i> <span class="btn-icon-right">{{ $type->nom }}</span>
            </button>

        @endif
    @endforeach
</div>
