<div class="container">
    <h5
        class="mb-0 center-title vehicle-title"
        style="color: #46c2e8; font-size: 14px; font-weight: bold; display: none;"
    >
        1ST VEHICLE
    </h5>
    <h1 class="text-center mb-4" style="color: #124476;">Vehicle Make</h1>
    <div class="makes-container">
        <div class="row">
            @foreach($featured as $make)
                @php
                    $src = asset('storage/' . $make->image_path);
                    $displayName = \Illuminate\Support\Str::title(strtolower($make->name));
                @endphp

                <div class="col-6 col-sm-4 col-md-3 col-lg-3 mb-4">
                    <a
                        href="{{ route('make.years', $make->id) }}"
                        style="text-decoration: none; color: inherit;"
                    >
                        <div
                            class="make-card text-center
                   {{ $make->id == ($selectedMakeId ?? '') ? 'highlighted' : '' }}"
                        >
                            <img
                                src="{{ $src }}"
                                alt="{{ $displayName }} Logo"
                                loading="lazy"
                                class="img-fluid mb-2"
                            >
                            <h5 class="make-name">{{ $displayName }}</h5>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        {{-- 2) Dropdown of all other makes --}}
        <div class="make-dropdown make-custom-dropdown" tabindex="0">
            <label class="make-dropdown-label" for="make">Other Make</label>

            <div class="make-dropdown-selected">
      <span class="make-selected-text">
        @if(! empty($selectedMakeId))
              @php
                  $sel = $others->firstWhere('id', $selectedMakeId);
                  $initialText = $sel
                    ? ($sel->name)
                    : 'Select Make';
              @endphp
              {{ $initialText }}
          @else
              Select Make
          @endif
      </span>
                <span class="make-dropdown-arrow">
        <svg width="32" height="32" viewBox="0 0 24 24">
          <polyline
              points="8 10 12 14 16 10"
              stroke="#858A8DFF"
              stroke-width="1.5"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
          />
        </svg>
      </span>
            </div>

            <ul class="make-dropdown-options">
                @foreach($others as $make)
                    @php
                        $src = asset('storage/' . $make->image_path);
                        $displayName = \Illuminate\Support\Str::title(strtolower($make->name));
                    @endphp

                    <li
                        onclick="window.location='{{ route('make.years', $make->id) }}';"
                        class="d-flex align-items-center make-option
                 {{ $make->id == ($selectedMakeId ?? '') ? 'chosen' : '' }}"
                        style="cursor:pointer;"
                    >
                        <img
                            src="{{ $src }}"
                            class="make-icon"
                            alt="{{ $displayName }} logo"
                            style="width:24px; height:24px; margin-right:8px;"
                        >
                        <span class="make-option-text">{{ $displayName }}</span>
                    </li>
                @endforeach
            </ul>

            <input type="hidden" name="make" id="make" />
                </div>

            </div>
</div>

