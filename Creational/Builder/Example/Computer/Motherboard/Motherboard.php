<?php

namespace Motherboard;

class Motherboard
{
    private CPU $cpu;
    private GPU $gpu;
    private NetworkCard $networkCard;
    private RAM $ram;

    /**
     * @param CPU $cpu
     * @param GPU $gpu
     * @param NetworkCard $networkCard
     * @param RAM $ram
     */
    public function __construct(CPU $cpu, GPU $gpu, NetworkCard $networkCard, RAM $ram)
    {
        $this->cpu = $cpu;
        $this->gpu = $gpu;
        $this->networkCard = $networkCard;
        $this->ram = $ram;
    }


}