<?php

namespace PhpGitHooks\Infrastructure\Common;

/**
 * Class ConfigFileToolValidator
 * @package PhpGitHooks\Infrastructure\Common
 */
class ConfigFileToolValidator
{
    /** @var array */
    private $files = array();

    /**
     * @param array $files
     */
    public function setFiles(array $files)
    {
        $this->files = $files;
    }

    /**
     * @return bool
     */
    public function existsConfigFile()
    {
        foreach ($this->files as $configFile) {
            if (file_exists($configFile)) {
                return true;
            }
        }

        return false;
    }
}