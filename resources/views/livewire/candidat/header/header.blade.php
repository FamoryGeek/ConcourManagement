<div>
    <div class="d-sm-flex d-none">
        <div class="dropdown">
            <a class="dropdown-toggle d-flex p-3 position-relative" href="#!" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-bell fs-4 lh-1"></i>
                <span class="count-label">
                    @if ($candidat['0']->etat == 0)
                    1
                    @else
                    0
                    @endif
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-sm">
                <h5 class="fw-semibold px-3 py-2 text-primary">Notification</h5>
                <div class="scroll250">
                    <div class="mx-3 d-flex gap-2 flex-column">
                        @if ($candidat['0']->etat == 0)
                        <div class="bg-danger-subtle border border-danger px-3 py-2 rounded-1">
                            <p class="m-0 text-danger">Message de supenssion</p>
                            <p class="small m-0">Vous avez été supendu à cause de certains dossier Invalide</p>
                        </div>
                        @else
                        Pas de notiffication
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
