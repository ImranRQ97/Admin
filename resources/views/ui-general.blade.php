@extends('layouts.master')
@section('title') @lang('translation.general') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Base UI @endslot
@slot('title') General @endslot
@endcomponent

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Popovers</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <p class="text-muted">Popovers example are available with follwing options , Directions are mirrored when using Bootstrap in RTL.</p>
                <div class="hstack flex-wrap gap-2">
                    <button type="button" class="btn btn-light tooltip-primary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" title="Top Popover" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                        Popover on top
                    </button>
                    <button type="button" class="btn btn-light" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" title="Right Popover" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                        Popover on right
                    </button>
                    <button type="button" class="btn btn-light" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" title="Bottom Popover" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                        Popover on bottom
                    </button>
                    <button type="button" class="btn btn-light" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" title="Left Popover" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                        Popover on left
                    </button>
                    <button tabindex="0" class="btn  btn-success" data-bs-toggle="popover" data-bs-trigger="focus" title="Dismissible popover" data-bs-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</button>
                </div>

            </div><!-- end card-body -->
            <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                <h5 class="fs-xs text-muted mb-0">HTML Preview</h5>
            </div>
            <div class="card-body">
                <pre class="language-markup" style="height: 250px;"><code>&lt;div class=&quot;hstack flex-wrap gap-2&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;top&quot; data-bs-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;
        Popover on top
    &lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;right&quot; data-bs-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;
        Popover on right
    &lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;bottom&quot; data-bs-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;
        Popover on bottom
    &lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;left&quot; data-bs-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;
        Popover on left
    &lt;/button&gt;
    &lt;button tabindex=&quot;0&quot; class=&quot;btn  btn-success&quot; role=&quot;button&quot; data-bs-toggle=&quot;popover&quot; data-bs-trigger=&quot;focus&quot; title=&quot;Dismissible popover&quot; data-bs-content=&quot;And here's some amazing content. It's very engaging. Right?&quot;&gt;Dismissible popover&lt;/button&gt;
&lt;/div&gt;</code></pre>
            </div>
        </div><!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Tooltips</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <p class="text-muted">Tooltip example are available with follwing options, Directions are mirrored when using Bootstrap in RTL.</p>
                <div class="hstack flex-wrap gap-2">
                    <button type="button" class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                        Tooltip on top
                    </button>
                    <button type="button" class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">
                        Tooltip on right
                    </button>
                    <button type="button" class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
                        Tooltip on bottom
                    </button>
                    <button type="button" class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">
                        Tooltip on left
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-html="true" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">
                        Tooltip with HTML
                    </button>
                </div>
            </div><!-- end card-body -->
            <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                <h5 class="fs-xs text-muted mb-0">HTML Preview</h5>
            </div>
            <div class="card-body">
                <pre class="language-markup" style="height: 250px;"><code>&lt;!-- Tooltips --&gt;
&lt;div class=&quot;hstack flex-wrap gap-2&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Tooltip on top&quot;&gt;
        Tooltip on top
    &lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;right&quot; title=&quot;Tooltip on right&quot;&gt;
        Tooltip on right
    &lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;bottom&quot; title=&quot;Tooltip on bottom&quot;&gt;
        Tooltip on bottom
    &lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;left&quot; title=&quot;Tooltip on left&quot;&gt;
        Tooltip on left
    &lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-html=&quot;true&quot; title=&quot;&lt;em&gt;Tooltip&lt;/em&gt; &lt;u&gt;with&lt;/u&gt; &lt;b&gt;HTML&lt;/b&gt;&quot;&gt;
        Tooltip with HTML
    &lt;/button&gt;
&lt;/div&gt;</code></pre>
            </div>
        </div><!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Tooltips Custom Colors</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <p class="text-muted">Use the <code>data-bs-custom-class="*-tooltip" </code> attributes to make a custom tooltip colors.</p>
                <div class="hstack flex-wrap gap-2">
                    <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-custom-class="primary-tooltip" data-bs-placement="top" title="Tooltip primary">
                        Primary Tooltip
                    </button>
                    <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-custom-class="secondary-tooltip" data-bs-placement="top" title="Tooltip secondary">
                        Secondary Tooltip
                    </button>
                    <button type="button" class="btn btn-success" data-bs-toggle="tooltip" data-bs-custom-class="success-tooltip" data-bs-placement="top" title="Tooltip success">
                        Success Tooltip
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-custom-class="danger-tooltip" data-bs-placement="top" title="Tooltip danger">
                        Danger Tooltip
                    </button>
                    <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-custom-class="info-tooltip" data-bs-placement="top" title="Tooltip info">
                        Info Tooltip
                    </button>
                    <button type="button" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-custom-class="warning-tooltip" data-bs-placement="top" title="Tooltip warning">
                        Warning Tooltip
                    </button>
                    <button type="button" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-custom-class="dark-tooltip" data-bs-placement="top" title="Tooltip dark">
                        Dark Tooltip
                    </button>
                </div>
            </div><!-- end card-body -->
            <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                <h5 class="fs-xs text-muted mb-0">HTML Preview</h5>
            </div>
            <div class="card-body">
                <pre class="language-markup" style="height: 250px;"><code>&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-custom-class=&quot;primary-tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Tooltip primary&quot;&gt;
    Primary Tooltip
&lt;/button&gt;</code>
<code>&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-custom-class=&quot;secondary-tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Tooltip secondary&quot;&gt;
    Secondary Tooltip
&lt;/button&gt;</code>
<code>&lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-custom-class=&quot;success-tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Tooltip success&quot;&gt;
    Success Tooltip
&lt;/button&gt;</code>
<code>&lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-custom-class=&quot;danger-tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Tooltip danger&quot;&gt;
    Danger Tooltip
&lt;/button&gt;</code>
<code>&lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-custom-class=&quot;info-tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Tooltip info&quot;&gt;
    Info Tooltip
&lt;/button&gt;</code>
<code>&lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-custom-class=&quot;warning-tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Tooltip warning&quot;&gt;
    Warning Tooltip
&lt;/button&gt;</code>
<code>&lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-custom-class=&quot;dark-tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Tooltip dark&quot;&gt;
    Dark Tooltip
&lt;/button&gt;</code>
<code>&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-custom-class=&quot;primary-tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Tooltip primary&quot;&gt;
    Primary Tooltip
&lt;/button&gt;</code>
<code>&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-custom-class=&quot;secondary-tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Tooltip secondary&quot;&gt;
    Secondary Tooltip
&lt;/button&gt;</code>
<code>&lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-custom-class=&quot;success-tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Tooltip success&quot;&gt;
    Success Tooltip
&lt;/button&gt;</code>
<code>&lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-custom-class=&quot;danger-tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Tooltip danger&quot;&gt;
    Danger Tooltip
&lt;/button&gt;</code>
<code>&lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-custom-class=&quot;info-tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Tooltip info&quot;&gt;
    Info Tooltip
&lt;/button&gt;</code>
<code>&lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-custom-class=&quot;warning-tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Tooltip warning&quot;&gt;
    Warning Tooltip
&lt;/button&gt;</code>
<code>&lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-custom-class=&quot;dark-tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Tooltip dark&quot;&gt;
    Dark Tooltip
&lt;/button&gt;</code></pre>
            </div>
        </div><!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Breadcrumb</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <p class="text-muted">Indicate the current page’s location within a navigational hierarchy</p>
                <div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb p-3 py-2 bg-light">
                            <li class="breadcrumb-item active" aria-current="page">Home</li>
                        </ol>
                    </nav>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb p-3 py-2 bg-light">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb p-3 py-2 bg-light">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Base UI</a></li>
                            <li class="breadcrumb-item active" aria-current="page">General</li>
                        </ol>
                    </nav>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb p-3 py-2 bg-light mb-0">
                            <li class="breadcrumb-item"><a href="#"><i class="ri-home-5-fill"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Base UI</a></li>
                            <li class="breadcrumb-item active" aria-current="page">General</li>
                        </ol>
                    </nav>
                </div>
            </div><!-- end card-body -->
            <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                <h5 class="fs-xs text-muted mb-0">HTML Preview</h5>
            </div>
            <div class="card-body">
                <pre class="language-markup" style="height: 250px;"><code>&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
    &lt;ol class=&quot;breadcrumb&quot;&gt;
        &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Home&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;
    
&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
    &lt;ol class=&quot;breadcrumb&quot;&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Library&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;
    
&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
    &lt;ol class=&quot;breadcrumb&quot;&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Base UI&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;General&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;

&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
    &lt;ol class=&quot;breadcrumb&quot;&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-home-5-fill&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Base UI&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;General&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;</code></pre>
            </div>
        </div><!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Pagination</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div>
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="fs-base">Default Pagination</h5>
                            <p class="text-muted">Use <code>pagination</code> class to ul element to indicate a series of related content exists across multiple pages.</p>

                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>

                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            ← &nbsp; Prev
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            Next &nbsp; →
                                        </a>
                                    </li>
                                </ul>
                            </nav>

                        </div>
                        <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mt-4 mt-lg-0">
                                <h5 class="fs-base">Disabled and Active states</h5>
                                <p class="text-muted">Use <code>disabled</code> class to links that appear un-clickable and <code>active</code> class to indicate the current page.</p>

                                <!-- Pagination Disabled & Active -->
                                <nav aria-label="...">
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">← &nbsp; Prev</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">2 <span class="visually-hidden">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next &nbsp; →</a>
                                        </li>
                                    </ul>
                                </nav>

                                <nav aria-label="...">
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <span class="page-link"><i class="mdi mdi-chevron-left"></i></span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active">
                                            <span class="page-link">
                                                2
                                                <span class="visually-hidden">(current)</span>
                                            </span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><i class="mdi mdi-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mt-4">
                                <h5 class="fs-base">Sizing</h5>
                                <p class="text-muted">Use <code>pagination-lg</code> or <code>pagination-sm</code> to set different pagination sizes.</p>
                                <!-- Pagination Large -->
                                <nav aria-label="...">
                                    <ul class="pagination pagination-lg">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">← &nbsp; Prev</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next &nbsp; →</a>
                                        </li>
                                    </ul>
                                </nav>

                                <!-- Pagination Small -->
                                <nav aria-label="...">
                                    <ul class="pagination pagination-sm">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">← &nbsp; Prev</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next &nbsp; →</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="mt-4">
                                <h5 class="fs-base">Alignment</h5>

                                <p class="text-muted">Use <code>justify-content-start</code>, <code>justify-content-start</code>, or <code>justify-content-start</code>, class to pagination class to change the alignment of pagination respectively.</p>
                                <!-- Pagination Alignment -->

                                <!-- Center Alignment -->
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">← &nbsp; Prev</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next &nbsp; →</a>
                                        </li>
                                    </ul>
                                </nav>

                                <!-- Right Alignment -->
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">← &nbsp; Prev</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next &nbsp; →</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mt-4">
                                <h5 class="fs-base">Custom Separated Pagination</h5>
                                <p class="text-muted">Use <code>pagination-separated</code> class to pagination class to set custom separated pagination.</p>
                                <!-- Custom Separated Pagination Large -->
                                <ul class="pagination pagination-lg pagination-separated">
                                    <li class="page-item disabled">
                                        <a href="#" class="page-link">←</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">5</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">→</a>
                                    </li>
                                </ul>

                                <!-- Pagination rounded -->
                                <ul class="pagination pagination-separated">
                                    <li class="page-item disabled">
                                        <a href="#" class="page-link">←</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">5</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">→</a>
                                    </li>
                                </ul>

                                <!-- Custom Separated Pagination Large -->
                                <ul class="pagination pagination-sm pagination-separated">
                                    <li class="page-item disabled">
                                        <a href="#" class="page-link">←</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">5</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">→</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mt-4">
                                <h5 class="fs-base">Custom Rounded Pagination</h5>
                                <p class="text-muted">Use <code>pagination-rounded</code> class to pagination class to set custom rounded pagination.</p>
                                <!-- Pagination rounded -->
                                <ul class="pagination pagination-lg pagination-rounded">
                                    <li class="page-item disabled">
                                        <a href="#" class="page-link">←</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">5</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">→</a>
                                    </li>
                                </ul>

                                <!-- Pagination rounded -->
                                <ul class="pagination pagination-rounded">
                                    <li class="page-item disabled">
                                        <a href="#" class="page-link">←</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">5</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">→</a>
                                    </li>
                                </ul>

                                <!-- Pagination rounded -->
                                <ul class="pagination pagination-sm pagination-rounded">
                                    <li class="page-item disabled">
                                        <a href="#" class="page-link">←</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">5</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">→</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end card-body -->
            <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                <h5 class="fs-xs text-muted mb-0">HTML Preview</h5>
            </div>
            <div class="card-body">
                <pre class="language-markup" style="height: 250px;"><code>&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination&quot;&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Previous&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code>

<code>&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination&quot;&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot; aria-label=&quot;Previous&quot;&gt;
                &lt;i class=&quot;mdi mdi-chevron-left&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot; aria-label=&quot;Next&quot;&gt;
                &lt;i class=&quot;mdi mdi-chevron-right&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code>


<code>&lt;!-- Pagination Disabled &amp; Active --&gt;
&lt;nav aria-label=&quot;...&quot;&gt;
    &lt;ul class=&quot;pagination&quot;&gt;
        &lt;li class=&quot;page-item disabled&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot; tabindex=&quot;-1&quot;&gt;Previous&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item active&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2 &lt;span class=&quot;visually-hidden&quot;&gt;(current)&lt;/span&gt;&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code>

<code>&lt;nav aria-label=&quot;...&quot;&gt;
    &lt;ul class=&quot;pagination&quot;&gt;
        &lt;li class=&quot;page-item disabled&quot;&gt;
            &lt;span class=&quot;page-link&quot;&gt;&lt;i class=&quot;mdi mdi-chevron-left&quot;&gt;&lt;/i&gt;&lt;/span&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item active&quot;&gt;
            &lt;span class=&quot;page-link&quot;&gt;
                2
                &lt;span class=&quot;visually-hidden&quot;&gt;(current)&lt;/span&gt;
            &lt;/span&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;&lt;i class=&quot;mdi mdi-chevron-right&quot;&gt;&lt;/i&gt;&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code>


<code>&lt;!-- Pagination sizing --&gt;

&lt;!-- Pagination Large --&gt;
&lt;nav aria-label=&quot;...&quot;&gt;
    &lt;ul class=&quot;pagination pagination-lg&quot;&gt;
        &lt;li class=&quot;page-item disabled&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot; tabindex=&quot;-1&quot;&gt;Previous&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code>

<code>&lt;!-- Pagination Small --&gt;
&lt;nav aria-label=&quot;...&quot;&gt;
    &lt;ul class=&quot;pagination pagination-sm&quot;&gt;
        &lt;li class=&quot;page-item disabled&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot; tabindex=&quot;-1&quot;&gt;Previous&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code>


<code>&lt;!-- Pagination Alignment --&gt;

&lt;!-- Center Alignment --&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination justify-content-center&quot;&gt;
        &lt;li class=&quot;page-item disabled&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot; tabindex=&quot;-1&quot;&gt;Previous&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code>

<code>&lt;!-- Right Alignment --&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination justify-content-end&quot;&gt;
        &lt;li class=&quot;page-item disabled&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot; tabindex=&quot;-1&quot;&gt;Previous&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code>


<code>&lt;!-- Pagination Rounded --&gt;
&lt;ul class=&quot;pagination pagination-rounded&quot;&gt;
    &lt;li class=&quot;page-item disabled&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;&lt;i class=&quot;mdi mdi-chevron-left&quot;&gt;&lt;/i&gt;&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;1&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item active&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;2&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;3&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;4&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;5&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;&lt;i class=&quot;mdi mdi-chevron-right&quot;&gt;&lt;/i&gt;&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
            </div>
        </div><!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Spinners</h4>
            </div><!-- end card header -->

            <div class="card-body">

                <div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                                <h5 class="fs-base">Border spinner</h5>
                                <p class="text-muted">Use <code>spinner-border</code> class for a lightweight loading indicator.</p>
                                <div class="d-flex flex-wrap gap-3 mb-2">
                                    <!-- Border spinner -->
                                    <div class="spinner-border text-primary" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-secondary" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-success" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-info" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-warning" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-danger" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-dark" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-light" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-lg-6">
                            <div>
                                <h5 class="fs-base">Growing spinner</h5>
                                <p class="text-muted">Use <code>spinner-grow</code> class for a lightweight spinner with growing effect.</p>
                                <div class="d-flex flex-wrap gap-3 mb-2">
                                    <!-- Growing spinner -->
                                    <div class="spinner-grow text-primary" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-secondary" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-success" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-info" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-warning" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-danger" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-dark" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-light" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>

            </div><!-- end card-body -->
            <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                <h5 class="fs-xs text-muted mb-0">HTML Preview</h5>
            </div>
            <div class="card-body">
                <pre class="language-markup" style="height: 250px;"><code>&lt;!-- Border spinner --&gt;
&lt;div class=&quot;spinner-border text-primary&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-border text-secondary&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-border text-success&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-border text-info&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-border text-warning&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-border text-danger&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-border text-dark&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-border text-light&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Growing spinner --&gt;
&lt;div class=&quot;spinner-grow text-primary&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-grow text-secondary&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-grow text-success&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-grow text-info&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-grow text-warning&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-grow text-danger&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-grow text-dark&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-grow text-light&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code></pre>
            </div>
        </div><!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Spinners Size</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <p class="text-muted">Add <code>.spinner-border-sm</code> and <code>.spinner-grow-sm</code> to make a smaller spinner that can quickly be used within other components.</p>

                <div class="d-flex gap-4">
                    <div class="spinner-border spinner-border-sm" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow spinner-grow-sm" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>

                    <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div><!-- end card-body -->
            <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                <h5 class="fs-xs text-muted mb-0">HTML Preview</h5>
            </div>
            <div class="card-body">
                <pre class="language-markup"><code>&lt;div class=&quot;spinner-border spinner-border-sm&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code>
<code>&lt;div class=&quot;spinner-grow spinner-grow-sm&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code>
<code>&lt;div class=&quot;spinner-border&quot; style=&quot;width: 3rem; height: 3rem;&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code>
<code>&lt;div class=&quot;spinner-grow&quot; style=&quot;width: 3rem; height: 3rem;&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code></pre>
            </div>
        </div><!-- end card -->
    </div>
    <!-- end col -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Spinners Buttons</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <p class="text-muted">Use spinners within buttons to indicate an action is currently processing or taking place. You may also swap the text out of the spinner element and utilize button text as needed.</p>

                <div class="d-flex gap-2">
                    <button class="btn btn-primary" type="button" disabled>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        <span class="visually-hidden">Loading...</span>
                    </button>
                    <button class="btn btn-primary" type="button" disabled>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...
                    </button>
                    <button class="btn btn-primary" type="button" disabled>
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                        <span class="visually-hidden">Loading...</span>
                    </button>
                    <button class="btn btn-primary" type="button" disabled>
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Loading...
                    </button>
                </div>
            </div><!-- end card-body -->
            <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                <h5 class="fs-xs text-muted mb-0">HTML Preview</h5>
            </div>
            <div class="card-body">
                <pre class="language-markup"><code>&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; disabled&gt;
    &lt;span class=&quot;spinner-border spinner-border-sm&quot; role=&quot;status&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/button&gt;</code>
<code>&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; disabled&gt;
    &lt;span class=&quot;spinner-border spinner-border-sm&quot; role=&quot;status&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt; Loading...
&lt;/button&gt;</code>
<code>&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; disabled&gt;
    &lt;span class=&quot;spinner-grow spinner-grow-sm&quot; role=&quot;status&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/button&gt;</code>
<code>&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; disabled&gt;
    &lt;span class=&quot;spinner-grow spinner-grow-sm&quot; role=&quot;status&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt; Loading...
&lt;/button&gt;</code></pre>
            </div>
        </div><!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@endsection
@section('script')
<script src="{{ URL::asset('build/libs/prismjs/prism.js') }}"></script>

<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
