<div id="contact" class="c-contact-banner">
    <div class="container">
        <div class="grid">

            <!-- Main content -->
            <div class="grid-md-8">
                @isset($headerMainContent)

                    @typography([
                        'element' => "h2",
                        'classList' => ['c-contact-banner__heading']
                    ])
                        @typography([
                            'element' => "span",
                            'classList' => ['c-contact-banner__heading-inner']
                        ])
                            {{ $headerMainContent }}
                        @endtypography
                    @endtypography

                @endisset

                @isset($mainContent)

                        @typography([
                            'element' => "p",
                            'classList' => ['c-contact-banner__preamble']
                        ])
                            @typography([
                                'element' => "span",
                                'classList' => ['c-contact-banner__preamble-inner']
                            ])
                                {{ $mainContent }}
                            @endtypography
                        @endtypography

                @endisset
            </div>

            <!-- Business hours -->
            <div class="grid-md-4">

                <div class="c-contact-banner__hours">

                    @isset($headerBusinessHours)

                        @typography([
                            'element' => "h3",
                            'classList' => ['c-contact-banner__hours-heading']
                        ])
                            @typography([
                                'element' => "span",
                                'classList' => ['c-contact-banner__hours-heading-inner']
                            ])
                                {{ $headerBusinessHours }}
                            @endtypography
                        @endtypography

                    @endisset

                    @isset($hoursList)
                        <ul class="c-contact-banner__hours-list">
                            @foreach ($hoursList as $listItem)
                                <li class="c-contact-banner__hours-list-item-{{ $loop->index }}">

                                    @typography([
                                        'element' => "span",
                                        'classList' => ['c-contact-banner__hours-list-label']
                                    ])
                                        @typography([
                                            'element' => "span",
                                            'classList' => ['c-contact-banner__hours-weekdays']
                                        ])
                                            {{ $listItem->weekdays }}
                                        @endtypography

                                        @typography([
                                            'element' => "span",
                                            'classList' => ['c-contact-banner__hours-time']
                                        ])
                                            {{ $listItem->from }}-{{ $listItem->to }}
                                        @endtypography

                                    @endtypography

                                </li>
                            @endforeach
                        </ul>
                    @endisset

                    @isset($abnormalitiesBusinessHours)
                        <div class="c-contact-banner__hours-exceptions">

                            @typography([
                                'element' => "span",
                                'classList' => ['small']
                            ])
                                {{ $abnormalitiesBusinessHours }}
                            @endtypography

                        </div>
                    @endisset
                </div>
            </div>

            <!-- Icon gradient -->
            <svg style="width:0;height:0;position:absolute;" aria-hidden="true" focusable="false">
                <linearGradient id="c-contact-banner__icon-gradient" x2="1" y2="1">
                    <stop offset="0%" stop-color="#cb0050" />
                    <stop offset="100%" stop-color="#fa1a74" />
                </linearGradient>
            </svg>

            <!-- Items -->
            <div class="grid-xs-12">
                <div class="c-contact-banner__wrapper">

                    <div class="c-contact-banner__items">
                        
                        @isset($ctaList)
                            @foreach ($ctaList as $listItem)
                                <div class="c-contact-banner__item">

                                    <div class="c-contact-banner__item-inner">

                                        @typography([
                                            'element' => "h3",
                                            'classList' => ['c-contact-banner__item-title']
                                        ])
                                            @typography([
                                                'element' => "span",
                                                'classList' => ['c-contact-banner__item-icon']
                                            ])
                                                {!! $listItem->icon !!}
                                            @endtypography

                                            @typography([
                                                'element' => "span",
                                                'classList' => ['c-contact-banner__item-title-inner']
                                            ])
                                                {{ $listItem->title }}
                                            @endtypography

                                        @endtypography

                                        @typography([
                                            'element' => "p",
                                            'classList' => ['c-contact-banner__item-content']
                                        ])
                                            @typography([
                                                'element' => "span",
                                                'classList' => ['c-contact-banner__item-content-inner']
                                            ])
                                                {{ $listItem->content }}
                                            @endtypography
                                        @endtypography

                                        @link([
                                            'href' => isset($listItem->url) ?? $listItem->url,
                                            'attributeList' => ['onclick' => isset($listItem->onclick) ?? $listItem->onclick],
                                            'classList' => ['c-contact-banner__item-cta']
                                        ])
                                            {{$listItem->label}}
                                            @icon([
                                                'icon' => 'chevron_right',
                                                'size' => 'md'
                                            ])
                                            @endicon
                                        @endbutton

                                    </div>
                                </div>
                            @endforeach
                        @endisset
                    </div>
                </div>
            </div>

            <!-- More info -->
            @isset($urlMoreInfo)
                <div class="grid-xs-12">

                    @link([
                        'href' => $urlMoreInfo,
                        'classList' => ['c-contact-banner__info']
                    ])
                        {{ $labelMoreInfo }}
                        @icon([
                            'icon' => 'chevron_right',
                            'size' => 'md'
                        ])
                        @endicon

                    @endbutton

                </div>
            @endisset

        </div>
    </div>
</div>