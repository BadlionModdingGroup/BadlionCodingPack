package io.github.badlionmoddinggroup.badlion.mixin;

import io.github.badlionmoddinggroup.badlion.extra.ContainerExtra;
import net.badlion.class_565;
import net.badlion.class_766;
import net.minecraft.container.Container;
import org.spongepowered.asm.mixin.Mixin;

@Mixin(Container.class)
public class ContainerMixin implements ContainerExtra {

    public class_565 badlionContainer;

    @Override
    public class_565 getBadlionContainer() {
        if (this.badlionContainer == null) {
            this.badlionContainer = new class_766((Container) (Object) this);
        }
        return this.badlionContainer;
    }

}
