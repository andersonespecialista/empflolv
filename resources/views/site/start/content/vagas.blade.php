@extends('site.start.index')
@section('content')

@include('site.start.includes.topsection')

@foreach($vagas as $vaga)
<section class="elementor-element elementor-element-bc42619 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="bc42619" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-element elementor-element-d385bfd elementor-column elementor-col-100 elementor-top-column" data-id="d385bfd" data-element_type="column">
                <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        
                        <section class="elementor-element elementor-element-7fff462 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="7fff462" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-1446417 elementor-column elementor-col-50 elementor-inner-column" data-id="1446417" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-424a182 elementor-view-framed elementor-shape-circle elementor-widget elementor-widget-icon" data-id="424a182" data-element_type="widget" data-widget_type="icon.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-wrapper">
                                                            <div class="elementor-icon">
                                                                <i aria-hidden="true" class="far fa-building"></i>			
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-c49537d elementor-column elementor-col-50 elementor-inner-column" data-id="c49537d" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-1ed67e7 elementor-widget elementor-widget-text-editor" data-id="1ed67e7" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix"><p>{{$vaga->cargo}}</p></div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-04e67ab elementor-widget elementor-widget-text-editor" data-id="04e67ab" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix"><p>{{$vaga->nome_empresa}}</p></div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-e248676 elementor-widget elementor-widget-text-editor" data-id="e248676" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">{{$vaga->descricao}}</div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4af9732 elementor-widget elementor-widget-divider" data-id="4af9732" data-element_type="widget" data-widget_type="divider.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-divider">
                                                            <span class="elementor-divider-separator"></span>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach


@stop