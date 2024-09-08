<div>
    <div class="d-flex justify-content-between mb-3">
        <div>
            <input type="text" class="form-control" placeholder="Search" id="search" />
        </div>
        <div>
            <button type="button" class="btn btn-sm btn-dark btn-icon" data-bs-toggle="modal" data-bs-target="#create_commune">
                <span class="btn-inner--icon">
                    <!-- Add your icon here -->
                </span>
                <span class="btn-inner--text">Add New</span>
            </button>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table align-items-center mb-0">
            <thead class="bg-gray-100">
                <tr>
                    @foreach($columns as $column)
                        <th data-column="{{ $column['name'] }}" data-direction="{{ $sortDirection }}" class="text-secondary text-xs font-weight-semibold opacity-7 {{ $column['sortable'] ? 'sortable' : '' }}">
                            {{ $column['label'] }}
                            @if($sortColumn === $column['name'])
                                <span class="sort-indicator">{{ $sortDirection === 'asc' ? '▲' : '▼' }}</span>
                            @endif
                        </th>
                    @endforeach
                    <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                    <tr>
                        @foreach($columns as $column)
                            <td>{{ $item[$column['name']] }}</td>
                        @endforeach
                        <td class="text-center">
                            <!-- Actions like edit/delete go here -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="pagination-container">
        @if($currentPage > 1)
            <a href="#" class="pagination-link" data-page="{{ $currentPage - 1 }}">Previous</a>
        @endif
        @for($i = 1; $i <= $totalPages; $i++)
            <a href="#" class="pagination-link {{ $i === $currentPage ? 'active' : '' }}" data-page="{{ $i }}">{{ $i }}</a>
        @endfor
        @if($currentPage < $totalPages)
            <a href="#" class="pagination-link" data-page="{{ $currentPage + 1 }}">Next</a>
        @endif
    </div>
</div>
