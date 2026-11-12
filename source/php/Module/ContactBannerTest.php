<?php

declare(strict_types=1);

namespace Modularity {
    class Module
    {
        public int $ID = 1;
    }
}

namespace Modularity\Helper {
    class WpService
    {
        public static \WpService\WpService $service;

        public static function get(): \WpService\WpService
        {
            return self::$service;
        }
    }
}

namespace {
    function get_field(string $name, int $id): mixed
    {
        return match ($name) {
            'mod_contactbanner_display_options',
            'mod_contactbanner_hours_list',
            'mod_contactbanner_cta_list' => [],
            default => false,
        };
    }

    function __(string $text, string $domain): string
    {
        return $text;
    }
}

namespace ModularityContactBanner\Module {
    use Modularity\Helper\WpService;
    use PHPUnit\Framework\TestCase;
    use WpService\Implementations\FakeWpService;

    class ContactBannerTest extends TestCase
    {
        public function testCtaIconUsesFilteredValue(): void
        {
            $service = new FakeWpService(['applyFilters' => 'custom_icon']);
            WpService::$service = $service;

            $data = (new ContactBanner())->data();

            self::assertSame('custom_icon', $data['ctaIcon']);
            self::assertSame(
                [['Modularity/ContactBanner/ctaIcon', 'arrow_forward']],
                $service->methodCalls['applyFilters']
            );
        }

        public function testCtaIconUsesDefaultWhenFilterLeavesItUnchanged(): void
        {
            WpService::$service = new FakeWpService([
                'applyFilters' => static fn (string $hook, mixed $value): mixed => $value,
            ]);

            self::assertSame('arrow_forward', (new ContactBanner())->data()['ctaIcon']);
        }
    }
}
