<?php

declare(strict_types=1);

namespace Ruwork\UploadBundle\TmpPath;

final class TmpPathGenerator implements TmpPathGeneratorInterface
{
    private $prefix;

    public function __construct(?string $prefix = null)
    {
        $this->prefix = $prefix ?? 'ruwork_upload_tmp_path';
    }

    /**
     * {@inheritdoc}
     */
    public function generateTmpPath(): string
    {
        return tempnam(sys_get_temp_dir(), $this->prefix);
    }
}
