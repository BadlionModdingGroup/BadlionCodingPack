package io.github.badlionmoddinggroup.badlion.extra;

import net.minecraft.client.render.ClientTickTracker;

public interface MinecraftClientExtra {

    ClientTickTracker getTimer();

    void clearScheduledTasks();

}