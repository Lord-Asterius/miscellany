<?php
/**
 * @var \App\User $model
 * @var \App\Models\UserLog $log
 */
$logs = $model->logs()->orderBy('created_at', 'DESC')->paginate(15);
?>
    <div class="col-lg-4 col-md-6">
        <div class="box box-solid" id="user-logs">
            <div class="box-header with-border">
                <h4 class="box-title">User Logs</h4>
            </div>
            <div class="box-body">
                <dl class="dl-horizontal">
                    @foreach ($logs as $log)
                        <dt>{{ $log->action() }}</dt>
                        <dd>
                            {{ $log->created_at->diffForHumans() }}
                        </dd>
                    @endforeach
                </dl>
            </div>
            @if ($logs->hasPages())
                <div class="box-footer text-right">
                    {{ $logs->links() }}
                </div>
            @endif
        </div>
    </div>
