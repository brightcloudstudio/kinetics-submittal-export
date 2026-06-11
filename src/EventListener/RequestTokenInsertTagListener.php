<?php

namespace KineticsSubmittalExport\EventListener;

use Contao\CoreBundle\DependencyInjection\Attribute\AsHook;
use Contao\CoreBundle\Csrf\ContaoCsrfTokenManager;

#[AsHook('replaceInsertTags')]
class RequestTokenInsertTagListener
{
    public function __construct(private readonly ContaoCsrfTokenManager $csrfTokenManager)
    {
    }

    public function __invoke(string $tag): string|false
    {
        // Strip any modifiers (e.g. |attr) before comparing
        $tagName = explode('|', $tag)[0];

        if ($tagName === 'request_token') {
            return $this->csrfTokenManager->getDefaultTokenValue();
        }

        return false;
    }
}
