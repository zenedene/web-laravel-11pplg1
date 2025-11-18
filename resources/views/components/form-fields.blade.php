@props(['fields', 'data' => null])

@foreach ($fields as $field)
    @php
        // Ambil nilai dari object/array tanpa fungsi global
        if ($data) {
            if (is_object($data) && isset($data->{$field['name']})) {
                $rawValue = $data->{$field['name']};
            } elseif (is_array($data) && isset($data[$field['name']])) {
                $rawValue = $data[$field['name']];
            } else {
                $rawValue = null;
            }
        } else {
            $rawValue = null;
        }

        $value = old($field['name'], $rawValue);
    @endphp

    <div>
        <label for="{{ $field['name'] }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            {{ $field['label'] }}
            @if (isset($field['required']) && $field['required'])
                <span class="text-red-500">*</span>
            @endif
        </label>

        {{-- TEXTAREA --}}
        @if ($field['type'] === 'textarea')
            <textarea name="{{ $field['name'] }}" id="{{ $field['name'] }}" rows="{{ $field['rows'] ?? 3 }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                       focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600
                       dark:placeholder-gray-400 dark:text-white"
                placeholder="{{ $field['placeholder'] ?? '' }}"
                {{ isset($field['required']) && $field['required'] ? 'required' : '' }}>{{ $value }}</textarea>

            {{-- SELECT --}}
        @elseif($field['type'] === 'select')
            <select name="{{ $field['name'] }}" id="{{ $field['name'] }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                       focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600
                       dark:text-white"
                {{ isset($field['required']) && $field['required'] ? 'required' : '' }}>

                <option value="">Pilih {{ $field['label'] }}</option>

                @foreach ($field['options'] as $option)
                    @php
                        // Normalisasi option → object/array boleh
                        if (is_object($option)) {
                            $optValue = $option->id ?? null;
                            $optLabel = $option->name ?? null;
                        } elseif (is_array($option)) {
                            $optValue = $option['value'] ?? null;
                            $optLabel = $option['label'] ?? null;
                        } else {
                            $optValue = null;
                            $optLabel = null;
                        }
                    @endphp

                    @if ($optValue !== null)
                        <option value="{{ $optValue }}" {{ $value == $optValue ? 'selected' : '' }}>
                            {{ $optLabel }}
                        </option>
                    @endif
                @endforeach

            </select>

            {{-- INPUT BIASA --}}
        @else
            <input type="{{ $field['type'] }}" name="{{ $field['name'] }}" id="{{ $field['name'] }}"
                value="{{ $value }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                       focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600
                       dark:placeholder-gray-400 dark:text-white"
                placeholder="{{ $field['placeholder'] ?? '' }}"
                {{ isset($field['required']) && $field['required'] ? 'required' : '' }}>
        @endif
    </div>
@endforeach
