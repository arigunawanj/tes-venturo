@foreach ($menu as $item)
    @if ($item->kategori == 'minuman')
        <tr>
            <td>{{ $item->menu }}</td>
            @for ($i = 1; $i <= 12; $i++)
                <td>{{ number_format($result[$item->menu][$i], 0, ',', '.') }}</td>
            @endfor
            <td class="fw-bold">{{ number_format($jumlahmenu[$item->menu], 0, ',', '.') }}</td>
        </tr>
    @endif
@endforeach
