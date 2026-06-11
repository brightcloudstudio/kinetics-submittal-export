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
        if ($tag === 'request_token') {
            return $this->csrfTokenManager->getDefaultTokenValue();
        }

        return false;
    }
}
