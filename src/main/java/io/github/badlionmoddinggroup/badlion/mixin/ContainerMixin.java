package io.github.badlionmoddinggroup.badlion.mixin;

import io.github.badlionmoddinggroup.badlion.extra.ContainerExtra;
import net.badlion.client.common.container.ContainerWrapper;
import net.badlion.client.container.BadlionContainer;
import net.minecraft.container.Container;
import org.spongepowered.asm.mixin.Mixin;

@Mixin(Container.class)
public class ContainerMixin implements ContainerExtra {

    public ContainerWrapper badlionContainer;

    @Override
    public ContainerWrapper getBadlionContainer() {
        if (this.badlionContainer == null) {
            this.badlionContainer = new BadlionContainer((Container) (Object) this);
        }
        return this.badlionContainer;
    }

}
