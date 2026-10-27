@php
    $hasVisibleTitle = !$hideTitle && !empty($postTitle);
@endphp
{{-- Anchor target (#contact) sits on the visible heading when there is one, so that
     screen readers move focus to it and continue reading the content (WCAG 2.4.3).
     Without a visible heading the region itself receives focus. --}}
<div
    @if(!$hasVisibleTitle) id="contact" tabindex="-1" @endif
    class="mod-contact-banner u-print-display--none"
    role="region"
    @if($hasVisibleTitle)
        aria-labelledby="contact"
    @else
        aria-label="{{$language->contact}}"
    @endif
>

    @if(!$hideContentArea || (!$hideTitle && !empty($postTitle)))
        <div class="mod-contact-banner__info-container">
            <div class="mod-contact-banner__content">
                @if (!$hideTitle && !empty($postTitle))
                    @typography([
                        "element" => "h2",
                        "id" => "contact",
                        "classList" => [
                            "mod-contact-banner__title"
                        ],
                        "attributeList" => [
                            "tabindex" => "-1"
                        ]
                    ])
                        {!! apply_filters('the_title', $postTitle) !!}
                    @endtypography
                @endif


            @if(!$hideMainContent && !empty($mainContent))
                @typography([
                    "element" => "p",
                    "classList" => [
                        "mod-contact-banner__text"
                    ]
                ])
                    {!! $mainContent !!}
                @endtypography
            @endif

            </div>

            @if(!$hideBusinessHours && !empty($headerBusinessHours))
            
                <div class="mod-contact-banner__hours u-border__left--1 u-border__left--0@xs u-border__left--0@sm">

                    <!-- Header for business hours -->
                    @typography([
                        "element" => "h3",
                        "variant" => "h4",
                        "classList" => [
                            "mod-contact-banner__hours-title"
                        ]
                    ])
                        {!! $headerBusinessHours !!}
                    @endtypography

                    <!-- Time & date list -->
                    @if($openHours)
                        @foreach ($openHours as $openHour)
                            @typography([
                                "element" => "p"
                            ])
                                {!! $openHour !!}
                            @endtypography 
                        @endforeach
                    @endif

                    <!-- Abnormal link message --> 
                    @if($abnormalHours)
                        @link([
                            'href' => $abnormalHours['link'], 
                            'keepContent' => true,
                            'classList' => [
                                'u-display--block'
                            ]
                        ])
                            @typography([
                                    "element" => "p",
                                    "classList" => [
                                        "mod-contact-banner__abnormal-hours"
                                    ]
                                ])
                                    {!! $abnormalHours['text'] !!}
                            @endtypography
                        @endlink
                    @endif

                </div>
            @endif
        </div>
    @endif

    @if(isset($ctaList) && !empty($ctaList))
        @card(['classList' => ['mod-contact-banner__cta-container']])
            @group(['classList' => []])
                @foreach ($ctaList as $index => $listItem)
                    @card([
                        'classList' => [
                            'card-item-'.$index,
                            'u-box-shadow--0',
                            'u-border--0',
                            !$loop->last ? 'u-border__right--1' : null,
                            !$loop->last ? 'u-border__bottom--1' : null,
                            'u-border__right--0@xs',
                            'u-border__right--0@sm',
                            'u-border__bottom--0@md',
                            'u-border__bottom--0@lg',
                            'u-border-radius--0',
                        ],
                        'context' => 'contactbanner'
                    ])

                        <div class="c-card__header u-padding__x--4 u-padding__top--3 u-padding__bottom--1">
                            
                            @if($listItem->icon)
                                @icon([
                                    'icon' => trim($listItem->icon), 
                                    'size' => 'md',
                                    'color' => 'primary'
                                ])
                                @endicon
                            @endif
        
                            @typography([
                                'element' => 'h3',
                                'variant' => 'h3',
                                'id'      => 'mod-contactbanner-' . $uniqueID . '-' . $index,
                                'classList' => ['u-margin__left--2', 'u-margin__top--0']
                            ])
        
                            {{$listItem->title}}
                            @endtypography
                        </div>

                        <div class="c-card__body u-padding__x--4 u-padding__top--0 u-padding__bottom--3 u-align-content--start">
                            {!! $listItem->content !!}
                        </div>

                        @if($listItem->displayCta)
                            <div class="c-card__footer mod-contact-banner__footer u-padding__x--4 u-padding__y--2">
                                @button([
                                    'text' => $listItem->label,
                                    'color' => 'default',
                                    'style' => 'basic',
                                    'icon' => $ctaIcon,
                                    'href' => !empty($listItem->url) ? $listItem->url : '',
                                    'attributeList' => [
                                        'onclick' => !empty($listItem->onclick) ? 'action'.$index.'()' : ''
                                    ]
                                ])
                                @endbutton

                                @if (!empty($listItem->onclick))
                                <script>function action{!! $index !!}() {
                                    {!! $listItem->onclick !!}
                                }</script>
                                @endif
                            </div>
                        @endif
        
                    @endcard
                @endforeach
            @endgroup
        @endcard
    @endif

</div>
