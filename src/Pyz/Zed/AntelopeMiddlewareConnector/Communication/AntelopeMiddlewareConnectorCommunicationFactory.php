<?php

namespace Pyz\Zed\AntelopeMiddlewareConnector\Communication;

use Pyz\Zed\AntelopeMiddlewareConnector\AntelopeMiddlewareConnectorDependencyProvider;
use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;
use SprykerMiddleware\Zed\Process\Business\ProcessFacadeInterface;

class AntelopeMiddlewareConnectorCommunicationFactory extends AbstractCommunicationFactory
{
    public function getProcessFacade(): ProcessFacadeInterface
    {
        return $this->getProvidedDependency(AntelopeMiddlewareConnectorDependencyProvider::FACADE_PROCESS);
    }
}
