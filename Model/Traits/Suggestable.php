<?php
/**
 * PHP version 7.
 *
 * LICENSE: This source file is subject to copyright
 *
 * @author      Florian Ajir <florian@tag-walk.com>
 * @copyright   2016-2019 TAGWALK
 * @license     proprietary
 */

namespace Tagwalk\ApiClientBundle\Model\Traits;

/**
 * Add suggest* properties to a Document.
 */
trait Suggestable
{
    /**
     * @var string[]|null
     */
    private $suggest;

    /**
     * @var string[]|null
     */
    private $suggestFr;

    /**
     * @var string[]|null
     */
    private $suggestEs;

    /**
     * @var string[]|null
     */
    private $suggestIt;

    /**
     * @var string[]|null
     */
    private $suggestZh;

    /**
     * @return null|string[]
     */
    public function getSuggest(): ?array
    {
        return $this->suggest;
    }

    /**
     * @param null|string[] $suggest
     *
     * @return self
     */
    public function setSuggest(?array $suggest): self
    {
        $this->suggest = $suggest;

        return $this;
    }

    /**
     * @return null|string[]
     */
    public function getSuggestFr(): ?array
    {
        return $this->suggestFr;
    }

    /**
     * @param null|string[] $suggestFr
     *
     * @return self
     */
    public function setSuggestFr(?array $suggestFr): self
    {
        $this->suggestFr = $suggestFr;

        return $this;
    }

    /**
     * @return null|string[]
     */
    public function getSuggestEs(): ?array
    {
        return $this->suggestEs;
    }

    /**
     * @param null|string[] $suggestEs
     *
     * @return self
     */
    public function setSuggestEs(?array $suggestEs): self
    {
        $this->suggestEs = $suggestEs;

        return $this;
    }

    /**
     * @return null|string[]
     */
    public function getSuggestIt(): ?array
    {
        return $this->suggestIt;
    }

    /**
     * @param null|string[] $suggestIt
     *
     * @return self
     */
    public function setSuggestIt(?array $suggestIt): self
    {
        $this->suggestIt = $suggestIt;

        return $this;
    }

    /**
     * @return null|string[]
     */
    public function getSuggestZh(): ?array
    {
        return $this->suggestZh;
    }

    /**
     * @param null|string[] $suggestZh
     *
     * @return self
     */
    public function setSuggestZh(?array $suggestZh): self
    {
        $this->suggestZh = $suggestZh;

        return $this;
    }
}
