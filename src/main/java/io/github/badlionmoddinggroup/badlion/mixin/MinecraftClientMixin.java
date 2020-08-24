package io.github.badlionmoddinggroup.badlion.mixin;

import io.github.badlionmoddinggroup.badlion.extra.MinecraftClientExtra;
import net.badlion.Class_2025;
import net.badlion.Class_758;
import net.badlion.client.Wrapper;
import net.badlion.client.common.BadlionClient;
import net.badlion.client.common.wrapper.MinecraftWrapper;
import net.badlion.client.util.BadlionFactory;
import net.badlion.launchwrapper.tweakers.BadlionTransformer;
import net.minecraft.client.MinecraftClient;
import net.minecraft.client.RunArgs;
import net.minecraft.client.render.ClientTickTracker;
import net.minecraft.client.util.Session;
import org.apache.logging.log4j.Logger;
import org.spongepowered.asm.mixin.Final;
import org.spongepowered.asm.mixin.Mixin;
import org.spongepowered.asm.mixin.Shadow;
import org.spongepowered.asm.mixin.injection.At;
import org.spongepowered.asm.mixin.injection.Inject;
import org.spongepowered.asm.mixin.injection.callback.CallbackInfo;

import java.util.Queue;
import java.util.concurrent.FutureTask;

@Mixin(MinecraftClient.class)
public class MinecraftClientMixin implements MinecraftClientExtra {

    @Shadow
    @Final
    private static Logger LOGGER;

    @Shadow
    @Final
    public Session session;

    @Shadow @Final private Queue<FutureTask<?>> tasks;

    private ClientTickTracker tricker = new ClientTickTracker(20.0F);
    private ClientTickTracker normalSpeedTimer = new ClientTickTracker(20.0F);

    @Inject(method = "<init>", at = @At("TAIL"))
    public void constructor(RunArgs args, CallbackInfo ci) {
        LOGGER.info("Setting user: " + this.session.getUsername());
        LOGGER.info("---------[ Badlion Client Loading Start ]---------");
        LOGGER.info("MC Version: 1.8");
        LOGGER.info("BLC Version: " + Wrapper.getBlcVersion());
        LOGGER.info("OF: " + BadlionTransformer.OPTIFINE_LOADED);
        LOGGER.info("OF VER: " + Class_2025.OPTIFINE_VERSION);
        LOGGER.info("Width: " + args.information.field_3672);
        LOGGER.info("Height: " + args.information.field_3673);
        LOGGER.info("FullScreen: " + args.information.field_3674);
        LOGGER.info("-------------------------------------------------");
        BadlionClient.debugMemory("WRAPPER_PRE_INIT");
        BadlionClient.factory = new BadlionFactory();
        new Wrapper(new Class_758((MinecraftClient) (Object) this));
        BadlionClient.debugMemory("WRAPPER_POST_INIT");
    }

    @Override
    public ClientTickTracker getTimer() {
        return tricker;
    }

    @Override
    public void clearScheduledTasks() {
        synchronized(this.tasks) {
            this.tasks.clear();
        }
    }

    @Override
    public void frameResize(int parameter_1, int parameter_2) {

    }

    @Override
    public void frameReset() {

    }
}
