@props(['href'])

<a href={{$href ?? ""}} {{$attributes->merge(['class'=>'text-sm'])}}>
    {{$slot}}
</a>