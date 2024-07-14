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

            <button type="button" class="btn btn-primary {{ $type->id == $session ? '' : 'active' }}"
                wire:click='type({{ $type->id }})'><i class="bi bi-gear fs-8 "></i> <span class="">{{ $type->nom }}</span>
            </button>

        @endif
    @endforeach
</div>
