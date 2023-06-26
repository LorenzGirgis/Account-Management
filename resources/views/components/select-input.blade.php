@props(['options' => [], 'account' => [], 'disabled' => false])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm appearance-none']) !!}>
    @foreach ($options as $option)
        <option value="{{ $option->id }}" @isset($account->account_type_id) @if ($option->id === $account->account_type_id) selected @endif @endisset>{{ $option->name }}</option>
    @endforeach
</select>
