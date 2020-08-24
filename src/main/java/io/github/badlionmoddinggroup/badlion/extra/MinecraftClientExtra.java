package io.github.badlionmoddinggroup.badlion.extra;

import net.minecraft.client.render.ClientTickTracker;

public interface MinecraftClientExtra {

    ClientTickTracker getTimer();

    void clearScheduledTasks();

    void frameResize(int parameter_1, int parameter_2);

    void frameReset();
}
